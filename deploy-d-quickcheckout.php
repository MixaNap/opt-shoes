<?php
/**
 * Скрипт для деплою файлів d_quickcheckout з GitHub
 * Відкрийте: https://your-domain.com/deploy-d-quickcheckout.php?token=ВАШ_ТОКЕН
 */

// БЕЗПЕКА: Змініть цей токен на випадковий рядок
$secret_token = 'kjhniuye893y098ryt09ch98347yt0n91834cy091348ytc091438yc09341';

// Перевірка токену
if (!isset($_GET['token']) || $_GET['token'] !== $secret_token) {
    http_response_code(403);
    die('Unauthorized. Invalid token.');
}

// Шлях до папки OpenCart
$baseDir = __DIR__;

// Функція для завантаження файлу з GitHub
function downloadFromGitHub($url, $destination) {
    // Спробуємо через curl
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        $data = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($httpCode === 200 && $data !== false && empty($error)) {
            $dir = dirname($destination);
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            return file_put_contents($destination, $data) !== false;
        }
    }
    
    // Якщо curl не працює, спробуємо через file_get_contents
    if (ini_get('allow_url_fopen')) {
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => 'User-Agent: Mozilla/5.0',
                'timeout' => 30
            ]
        ]);
        
        $data = @file_get_contents($url, false, $context);
        if ($data !== false) {
            $dir = dirname($destination);
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            return file_put_contents($destination, $data) !== false;
        }
    }
    
    return false;
}

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>d_quickcheckout Deployment</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .container { background: white; padding: 20px; border-radius: 5px; max-width: 800px; }
        pre { background: #f0f0f0; padding: 15px; border-radius: 3px; overflow-x: auto; }
        .success { color: green; }
        .error { color: red; }
        .info { color: blue; }
    </style>
</head>
<body>
<div class="container">
<h2>🚀 d_quickcheckout Deployment Script</h2>
<pre>
<?php
echo "Starting deployment...\n";
echo "========================================\n\n";

// Список файлів d_quickcheckout для оновлення
$files_to_update = [
    'catalog/controller/extension/d_quickcheckout/cart.php',
    'catalog/controller/extension/d_quickcheckout/confirm.php',
    'catalog/controller/extension/payment/cod.php',
    'catalog/model/extension/d_quickcheckout/order.php',
    'catalog/view/theme/default/template/extension/payment/cod.twig',
    'catalog/controller/common/cart.php', // Міні-кошик (виправлення розрахунку цін)
];

$github_base = 'https://raw.githubusercontent.com/MixaNap/opt-shoes/main/';
$updated = 0;
$failed = 0;
$errors = [];

foreach ($files_to_update as $file) {
    $url = $github_base . $file;
    $destination = $baseDir . '/' . $file;
    
    echo "Updating: $file... ";
    
    if (downloadFromGitHub($url, $destination)) {
        echo "<span class='success'>✓ OK</span>\n";
        $updated++;
    } else {
        echo "<span class='error'>✗ FAILED</span>\n";
        $failed++;
        $errors[] = $file;
    }
}

// Очищення кешу
echo "\nClearing cache...\n";

$possibleCachePaths = [
    $baseDir . '/system/storage/cache/',
    $baseDir . '/storage/cache/',
];

$possibleModificationPaths = [
    $baseDir . '/system/storage/modification/',
    $baseDir . '/storage/modification/',
];

$cacheCleared = false;
$modificationCleared = false;

// Очищення кешу
foreach ($possibleCachePaths as $cacheDir) {
    if (is_dir($cacheDir)) {
        $files = array_diff(scandir($cacheDir), ['.', '..', 'index.php', 'index.html']);
        foreach ($files as $file) {
            $filePath = $cacheDir . $file;
            if (is_dir($filePath)) {
                array_map('unlink', glob($filePath . '/*'));
                @rmdir($filePath);
            } else {
                @unlink($filePath);
            }
        }
        echo "<span class='success'>✓ Cache cleared</span>\n";
        $cacheCleared = true;
        break;
    }
}

if (!$cacheCleared) {
    echo "<span class='error'>✗ Cache directory not found</span>\n";
}

// Очищення модифікацій
foreach ($possibleModificationPaths as $modificationDir) {
    if (is_dir($modificationDir)) {
        $files = array_diff(scandir($modificationDir), ['.', '..', 'index.php', 'index.html']);
        foreach ($files as $file) {
            $filePath = $modificationDir . $file;
            if (is_dir($filePath)) {
                array_map('unlink', glob($filePath . '/*'));
                @rmdir($filePath);
            } else {
                @unlink($filePath);
            }
        }
        echo "<span class='success'>✓ Modification cache cleared</span>\n";
        $modificationCleared = true;
        break;
    }
}

if (!$modificationCleared) {
    echo "<span class='error'>✗ Modification directory not found</span>\n";
}

echo "\n========================================\n";
echo "Deployment Summary:\n";
echo "========================================\n";
echo "<span class='success'>Updated: $updated files</span>\n";
if ($failed > 0) {
    echo "<span class='error'>Failed: $failed files</span>\n";
    echo "\nFailed files:\n";
    foreach ($errors as $error) {
        echo "  - $error\n";
    }
}
echo "\nCache: " . ($cacheCleared ? "<span class='success'>Cleared</span>" : "<span class='error'>Failed</span>") . "\n";
echo "Modification: " . ($modificationCleared ? "<span class='success'>Cleared</span>" : "<span class='error'>Failed</span>") . "\n";
echo "========================================\n";

if ($updated === count($files_to_update) && $cacheCleared && $modificationCleared) {
    echo "\n<span class='success'><strong>✅ Deployment completed successfully!</strong></span>\n";
} else {
    echo "\n<span class='error'><strong>⚠️ Deployment completed with errors. Please check failed files.</strong></span>\n";
}
?>
</pre>

<p><strong>⚠️ Security Note:</strong> Delete or rename this file after deployment!</p>
</div>
</body>
</html>


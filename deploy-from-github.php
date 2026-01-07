<?php
/**
 * Скрипт для автоматичного деплою з GitHub
 * Відкрийте: https://your-domain.com/deploy-from-github.php?token=ВАШ_ТОКЕН
 * 
 * ВАЖЛИВО: Змініть секретний токен перед використанням!
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

// Функція для видалення папки
function deleteDirectory($dir) {
    if (!file_exists($dir)) return true;
    if (!is_dir($dir)) return unlink($dir);
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') continue;
        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) return false;
    }
    return rmdir($dir);
}

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
    <title>GitHub Deployment</title>
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
<h2>🚀 GitHub Deployment Script</h2>
<pre>
<?php
echo "Starting deployment...\n";
echo "========================================\n\n";

// Список файлів для оновлення
$files_to_update = [
    // Адмін панель
    'admin/model/catalog/product.php',
    'admin/controller/catalog/product.php',
    'admin/view/template/catalog/product_form.twig',
    'admin/language/uk-ua/common/footer.php',
    
    // Каталог
    'catalog/model/catalog/product.php',
    'catalog/controller/product/product.php',
    'catalog/controller/product/category.php',
    'catalog/controller/checkout/cart.php',
    'catalog/controller/common/cart.php',
    'catalog/model/extension/total/sub_total.php',
    
    // d_quickcheckout модуль (виправлення розрахунку цін)
    'catalog/controller/extension/d_quickcheckout/cart.php',
    'catalog/controller/extension/d_quickcheckout/confirm.php',
    'catalog/controller/extension/payment/cod.php',
    'catalog/model/extension/d_quickcheckout/order.php',
    'catalog/view/theme/default/template/extension/payment/cod.twig',
    
    // Адмін-панель (виправлення відображення суми замовлень)
    'admin/controller/sale/order.php',
    
    // Мови
    'catalog/language/uk-ua/common/footer.php',
    'catalog/language/uk-ua/extension/module/webdigifytabs.php',
    'catalog/language/ru-ru/extension/module/webdigifytabs.php',
    
    // Шаблони
    'catalog/view/theme/Crazy/template/product/product.twig',
    'catalog/view/theme/Crazy/template/product/category.twig',
    'catalog/view/theme/Crazy/template/checkout/cart.twig',
    'catalog/view/theme/Crazy/template/common/cart.twig',
    
    // Адмін шаблони
    'admin/view/template/common/footer.twig',
    
    // Система
    'system/library/cart/cart.php',
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

// Вимкнення модуля Carousel з банером PayPal
echo "\nDisabling PayPal banner module...\n";
$paypalBannerDisabled = false;

// Спробуємо прочитати конфігурацію БД з config.php
$configFile = $baseDir . '/config.php';
if (file_exists($configFile)) {
    // Читаємо config.php
    $configContent = file_get_contents($configFile);
    
    // Витягуємо дані БД з config.php
    preg_match("/define\('DB_HOSTNAME',\s*'([^']+)'\)/", $configContent, $hostname);
    preg_match("/define\('DB_USERNAME',\s*'([^']+)'\)/", $configContent, $username);
    preg_match("/define\('DB_PASSWORD',\s*'([^']+)'\)/", $configContent, $password);
    preg_match("/define\('DB_DATABASE',\s*'([^']+)'\)/", $configContent, $database);
    preg_match("/define\('DB_PREFIX',\s*'([^']+)'\)/", $configContent, $prefix);
    
    if (!empty($hostname[1]) && !empty($username[1]) && !empty($database[1])) {
        $dbHost = $hostname[1];
        $dbUser = $username[1];
        $dbPass = isset($password[1]) ? $password[1] : '';
        $dbName = $database[1];
        $dbPrefix = isset($prefix[1]) ? $prefix[1] : 'oc_';
        
        // Підключення до БД
        $mysqli = @new mysqli($dbHost, $dbUser, $dbPass, $dbName);
        
        if (!$mysqli->connect_error) {
            // Вимикаємо модуль Carousel з ID=29 (Home Page Carousel з banner_id=8)
            // Оновлюємо JSON setting, встановлюючи status в '0'
            $moduleId = 29;
            $query = "SELECT `setting` FROM `" . $dbPrefix . "module` WHERE `module_id` = " . (int)$moduleId . " AND `code` = 'carousel'";
            $result = $mysqli->query($query);
            
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $setting = json_decode($row['setting'], true);
                
                if (is_array($setting) && isset($setting['status']) && $setting['status'] == '1') {
                    $setting['status'] = '0';
                    $newSetting = json_encode($setting);
                    $updateQuery = "UPDATE `" . $dbPrefix . "module` SET `setting` = '" . $mysqli->real_escape_string($newSetting) . "' WHERE `module_id` = " . (int)$moduleId;
                    
                    if ($mysqli->query($updateQuery)) {
                        echo "<span class='success'>✓ PayPal banner module disabled</span>\n";
                        $paypalBannerDisabled = true;
                    } else {
                        echo "<span class='error'>✗ Failed to disable PayPal banner module: " . $mysqli->error . "</span>\n";
                    }
                } else {
                    echo "<span class='info'>ℹ PayPal banner module already disabled</span>\n";
                    $paypalBannerDisabled = true;
                }
            } else {
                echo "<span class='info'>ℹ PayPal banner module not found (may be already removed)</span>\n";
                $paypalBannerDisabled = true;
            }
            
            $mysqli->close();
        } else {
            echo "<span class='error'>✗ Database connection failed: " . $mysqli->connect_error . "</span>\n";
        }
    } else {
        echo "<span class='error'>✗ Could not read database config from config.php</span>\n";
    }
} else {
    echo "<span class='error'>✗ config.php not found</span>\n";
}

// Очищення кешу
echo "\nClearing cache...\n";

// Перевірка різних можливих шляхів до кешу
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
        // Видаляємо всі файли та папки всередині, але залишаємо саму директорію
        $files = array_diff(scandir($cacheDir), ['.', '..', 'index.php']);
        foreach ($files as $file) {
            $filePath = $cacheDir . $file;
            if (is_dir($filePath)) {
                deleteDirectory($filePath);
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
        // Видаляємо всі файли та папки всередині, але залишаємо саму директорію
        $files = array_diff(scandir($modificationDir), ['.', '..', 'index.php']);
        foreach ($files as $file) {
            $filePath = $modificationDir . $file;
            if (is_dir($filePath)) {
                deleteDirectory($filePath);
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
echo "PayPal Banner: " . ($paypalBannerDisabled ? "<span class='success'>Disabled</span>" : "<span class='error'>Failed</span>") . "\n";
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



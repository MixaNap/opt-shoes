<?php
/**
 * Скрипт для вимкнення банера PayPal (модуль Carousel з ID=29)
 * 
 * ІНСТРУКЦІЯ:
 * 1. Запустіть цей файл через браузер: http://mixa.opt.production/disable_paypal_banner.php
 * 2. Або видаліть файл після використання з міркувань безпеки
 */

// Підключення конфігурації OpenCart
require_once('config.php');
require_once(DIR_SYSTEM . 'startup.php');

// Ініціалізація
$registry = new Registry();
$config = new Config();
$config->set('config_application_id', 'Admin');

// Підключення до бази даних
$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

// ID модуля Carousel з банером PayPal
$module_id = 29;

// Отримуємо поточні налаштування модуля
$query = $db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `module_id` = '" . (int)$module_id . "'");

if ($query->num_rows) {
    $module_data = json_decode($query->row['setting'], true);
    
    echo "<h2>Вимкнення банера PayPal</h2>";
    echo "<p><strong>Модуль:</strong> " . htmlspecialchars($query->row['name']) . "</p>";
    echo "<p><strong>Код:</strong> " . htmlspecialchars($query->row['code']) . "</p>";
    echo "<p><strong>Поточний статус:</strong> " . ($module_data['status'] ? 'Увімкнено' : 'Вимкнено') . "</p>";
    
    if ($module_data['status']) {
        // Вимкнути модуль
        $module_data['status'] = '0';
        $setting_json = json_encode($module_data);
        
        $db->query("UPDATE `" . DB_PREFIX . "module` SET `setting` = '" . $db->escape($setting_json) . "' WHERE `module_id` = '" . (int)$module_id . "'");
        
        echo "<p style='color: green;'><strong>✅ Банер PayPal успішно вимкнено!</strong></p>";
        echo "<p>Модуль 'Home Page Carousel' тепер вимкнено і банер PayPal більше не відображатиметься.</p>";
    } else {
        echo "<p style='color: orange;'><strong>⚠️ Модуль вже вимкнено.</strong></p>";
    }
    
    echo "<hr>";
    echo "<h3>Альтернативні способи:</h3>";
    echo "<ol>";
    echo "<li><strong>Через адмін-панель:</strong> Extensions → Extensions → Modules → Carousel → Редагувати → Status: Disabled</li>";
    echo "<li><strong>Через SQL:</strong> Виконайте запит з файлу disable_paypal_banner.sql</li>";
    echo "</ol>";
    
} else {
    echo "<p style='color: red;'><strong>❌ Помилка: Модуль з ID={$module_id} не знайдено!</strong></p>";
    echo "<p>Можливо, модуль вже видалено або має інший ID.</p>";
}

echo "<hr>";
echo "<p><small>Після використання видаліть цей файл з міркувань безпеки.</small></p>";
?>


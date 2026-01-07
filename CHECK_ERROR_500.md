# Інструкція для виявлення помилки 500 на глобальному сервері

## 1. Перевірте логи помилок OpenCart

Шлях до логів: `system/storage/logs/error.log`

Перевірте останні записи в логі:
```bash
tail -50 system/storage/logs/error.log
```

## 2. Перевірте логи PHP (якщо є доступ)

Шлях залежить від сервера:
- Apache: `/var/log/apache2/error.log` або `/var/log/httpd/error_log`
- Nginx: `/var/log/nginx/error.log`
- OSPanel/XAMPP: `logs/php_error.log`

## 3. Увімкніть display_errors тимчасово (для діагностики)

Додайте в `index.php` на початку файлу (ПЕРЕД усіма іншими рядками):
```php
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```

**ВАЖЛИВО:** Після діагностики обов'язково видаліть ці рядки!

## 4. Перевірте, чи правильно задеплоїли файли

Переконайтеся, що задеплоїли обидва файли:
- `catalog/controller/extension/d_quickcheckout/cart.php`
- `catalog/model/extension/d_quickcheckout/order.php`

## 5. Очистіть кеш на глобальному сервері

1. Видаліть всі файли з `system/storage/cache/` (крім `index.html`)
2. Видаліть всі файли з `system/storage/modification/` (крім `index.html`)
3. В адмін-панелі: **Система → Модифікації → Оновити модифікації**

## 6. Перевірте права доступу до файлів

Переконайтеся, що файли мають правильні права:
```bash
chmod 644 catalog/controller/extension/d_quickcheckout/cart.php
chmod 644 catalog/model/extension/d_quickcheckout/order.php
```

## 7. Перевірте версію PHP

Можливо, на глобальному сервері інша версія PHP. Перевірте:
```php
<?php phpinfo(); ?>
```

## 8. Перевірте, чи є синтаксичні помилки в файлах

Запустіть перевірку синтаксису:
```bash
php -l catalog/controller/extension/d_quickcheckout/cart.php
php -l catalog/model/extension/d_quickcheckout/order.php
```

## Що робити далі:

1. Спочатку перевірте логи помилок (пункт 1)
2. Якщо в логах немає інформації, увімкніть display_errors (пункт 3)
3. Надішліть мені точний текст помилки з логів або з екрану браузера
4. Після виявлення помилки я допоможу її виправити


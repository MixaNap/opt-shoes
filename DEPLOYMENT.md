# Інструкція по оновленню на основному сервері

## Варіант 1: Якщо Git вже налаштований на сервері

### Крок 1: Підключення до сервера
```bash
ssh user@your-server.com
# або через FTP/SFTP клієнт
```

### Крок 2: Перехід в директорію проекту
```bash
cd /path/to/your/opencart/directory
# Наприклад: cd /var/www/html/mixa.opt.production
```

### Крок 3: Оновлення з GitHub
```bash
# Перевірка поточного статусу
git status

# Отримання останніх змін з GitHub
git fetch origin

# Перегляд змін перед застосуванням
git log HEAD..origin/main

# Застосування змін
git pull origin main

# Або якщо гілка вже налаштована для відстеження
git pull
```

### Крок 4: Очищення кешу OpenCart
```bash
# Очищення кешу модифікацій
rm -rf system/storage/modification/*

# Очищення кешу файлів (опціонально)
rm -rf system/storage/cache/*

# Перевірка прав доступу
chmod -R 755 system/storage/
chown -R www-data:www-data system/storage/
```

---

## Варіант 2: Якщо Git НЕ налаштований на сервері (перший раз)

### Крок 1: Підключення до сервера
```bash
ssh user@your-server.com
```

### Крок 2: Клонування репозиторію
```bash
# Перехід в батьківську директорію
cd /var/www/html  # або ваша директорія

# Клонування репозиторію
git clone https://github.com/MixaNap/opt-shoes.git mixa.opt.production

# Або якщо директорія вже існує, перейменуйте її спочатку
mv mixa.opt.production mixa.opt.production.backup
git clone https://github.com/MixaNap/opt-shoes.git mixa.opt.production
```

### Крок 3: Налаштування конфігурації
```bash
cd mixa.opt.production

# Скопіюйте файли конфігурації з бекапу (якщо були)
cp ../mixa.opt.production.backup/config.php .
cp ../mixa.opt.production.backup/admin/config.php admin/

# Або створіть нові файли конфігурації з правильними налаштуваннями БД
```

### Крок 4: Налаштування прав доступу
```bash
chmod -R 755 .
chmod -R 777 system/storage/
chown -R www-data:www-data .
```

---

## Варіант 3: Через FTP/SFTP (якщо немає доступу до SSH)

### Крок 1: Завантажте змінені файли
Завантажте тільки змінені файли з локального репозиторію:

**Змінені файли:**
- `admin/language/uk-ua/common/footer.php`
- `catalog/language/uk-ua/common/footer.php`
- `catalog/language/uk-ua/extension/module/webdigifytabs.php` (новий файл)
- `catalog/language/ru-ru/extension/module/webdigifytabs.php`

### Крок 2: Очищення кешу через адмін-панель
1. Увійдіть в адмін-панель OpenCart
2. Перейдіть: **Dashboard** → **Settings** → **Refresh** (або очистіть кеш через інструменти)

---

## Важливі зауваження

### ⚠️ ПЕРЕД ОНОВЛЕННЯМ:

1. **Зробіть бекап:**
   ```bash
   # Бекап бази даних
   mysqldump -u username -p database_name > backup_$(date +%Y%m%d).sql
   
   # Бекап файлів
   tar -czf backup_files_$(date +%Y%m%d).tar.gz /path/to/opencart/
   ```

2. **Перевірте конфігурацію:**
   - Переконайтеся, що `config.php` та `admin/config.php` мають правильні налаштування БД
   - Перевірте права доступу до директорій

3. **Перевірте .gitignore:**
   - Переконайтеся, що конфігураційні файли не потрапляють в репозиторій
   - Файли `config.php` та `admin/config.php` мають бути в `.gitignore`

### ✅ ПІСЛЯ ОНОВЛЕННЯ:

1. **Очистіть кеш OpenCart:**
   - Кеш модифікацій: `system/storage/modification/`
   - Кеш файлів: `system/storage/cache/`

2. **Перевірте сайт:**
   - Перевірте головну сторінку
   - Перевірте адмін-панель
   - Перевірте, що посилання на proplat.biz зникли

3. **Перевірте логи:**
   ```bash
   tail -f system/storage/logs/error.log
   ```

---

## Швидка команда для оновлення (якщо Git вже налаштований)

```bash
cd /path/to/opencart && \
git pull origin main && \
rm -rf system/storage/modification/* && \
chmod -R 755 system/storage/
```

---

## Допомога

Якщо виникли проблеми:
1. Перевірте логи: `system/storage/logs/error.log`
2. Перевірте права доступу: `ls -la system/storage/`
3. Перевірте конфігурацію БД в `config.php`





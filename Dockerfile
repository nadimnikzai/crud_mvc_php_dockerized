# 1. استفاده از نسخه رسمی PHP با آپاچی
FROM php:8.2-apache

# 2. نصب اکستنشن‌های لازم برای دیتابیس (PDO MySQL)
RUN docker-php-ext-install pdo pdo_mysql

# 3. فعال‌سازی ماژول Rewrite آپاچی (برای آدرس‌دهی‌های تمیز لازمه)
RUN a2enmod rewrite

# 4. تغییر صاحب فایل‌ها به یوزر آپاچی (برای جلوگیری از ارورهای دسترسی)
RUN chown -R www-data:www-data /var/www/html
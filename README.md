<div align="center">

# 🌿 گوین | Gavin Shop

### هنر دست · طبیعت · روایت

**فروشگاه آنلاین حرفه‌ای صنایع دستی ایرانی**  
A secure, elegant & production-ready PHP marketplace for authentic Iranian handicrafts

[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-Private-red?style=for-the-badge)]()
[![Status](https://img.shields.io/badge/Status-Production%20Ready-success?style=for-the-badge)]()

<br>

[![Live Demo](https://img.shields.io/badge/🌐_Live_Demo-Coming_Soon-blue?style=for-the-badge)]()
[![GitHub](https://img.shields.io/badge/⭐_Star_this_repo-black?style=for-the-badge&logo=github)](https://github.com/sinajr2011-prog/Gavin-shop)

</div>

---

## ✨ درباره پروژه

**گوین** یک فروشگاه آنلاین کامل و آماده استقرار برای فروش صنایع دستی دست‌ساز ایرانی است.  
طراحی شده با تمرکز روی زیبایی بصری، تجربه کاربری روان، امنیت و مقیاس‌پذیری واقعی.

این پروژه شامل:

- فروشگاه عمومی زیبا با گالری و روایت‌ها
- سیستم سفارش‌گذاری کامل با محاسبه هزینه ارسال بر اساس استان/شهر
- چت مستقیم مشتری ↔ مالک
- پنل فروشنده + پنل توسعه‌دهنده قدرتمند
- سیستم اعلان، لاگ حسابرسی و مدیریت درگاه پرداخت

---

## 🖼 پیش‌نمایش

> 📸 **Screenshots** (به‌زودی اضافه می‌شود)

| صفحه اصلی | فروشگاه | صفحه محصول | پنل مدیریت |
|-----------|---------|------------|------------|
| ![Home](https://via.placeholder.com/400x250/425747/f5f0e7?text=Home+Page) | ![Shop](https://via.placeholder.com/400x250/60725f/f5f0e7?text=Shop) | ![Product](https://via.placeholder.com/400x250/a65d43/f5f0e7?text=Product) | ![Panel](https://via.placeholder.com/400x250/b4935c/f5f0e7?text=Admin+Panel) |

---

## 🚀 ویژگی‌های کلیدی

### برای مشتریان
- 🏠 صفحه اصلی جذاب با محصولات ویژه
- 🛍 فروشگاه کامل با فیلتر و جستجو
- 📦 صفحه محصول حرفه‌ای (تصاویر، موجودی، قیمت واقعی)
- 🛒 سبد خرید هوشمند
- 💬 چت زنده با مالک گوین
- 👤 پنل کاربری (سفارش‌ها، اعلان‌ها، پروفایل)

### برای مالک / فروشنده
- 📊 داشبورد مدیریت سفارش‌ها
- 🚚 سیستم ارسال هوشمند (استان + شهر + نرخ‌های تأییدشده)
- 📦 مدیریت محصولات و دسته‌بندی‌های پویا
- 💰 مدیریت مالی و درخواست تسویه
- 🔔 سیستم اعلان داخلی

### برای توسعه‌دهنده
- 🛡 پنل توسعه‌دهنده کامل
- 📝 لاگ حسابرسی (Audit Log)
- 🔌 مدیریت درگاه‌های پرداخت
- 📈 نظارت بر فروشندگان و سفارش‌ها
- 🔒 کنترل دسترسی نقش‌محور

---

## 🛠 تکنولوژی‌ها

| لایه | تکنولوژی |
|------|----------|
| Backend | PHP 8.1+ (Native) |
| Database | MySQL 8 / MariaDB |
| Frontend | HTML5 · CSS3 · Vanilla JS |
| Security | CSRF Protection · Password Hashing · Prepared Statements |
| Architecture | Clean Structure · Role-based Access · Atomic Transactions |

---

## 📁 ساختار پروژه

```text
Gavin-shop/
├── assets/                 # CSS, JS, تصاویر گالری
├── config/                 # تنظیمات دیتابیس، احراز هویت، هلپرها
├── account/                # پنل کاربری مشتری
├── panel/
│   ├── seller/             # پنل فروشنده
│   └── developer/          # پنل توسعه‌دهنده
├── api/                    # APIهای سفارش
├── database/               # schema + seed + migrationها
├── uploads/products/       # تصاویر محصولات (writable)
├── index.php               # صفحه اصلی
├── shop.php                # فروشگاه
├── product.php             # صفحه محصول
├── checkout.php            # تسویه‌حساب
├── chat.php                # چت
└── ...
```

---

## ⚙️ نصب و راه‌اندازی

### ۱. کلون کردن پروژه
```bash
git clone https://github.com/sinajr2011-prog/Gavin-shop.git
cd Gavin-shop
```

### ۲. ایجاد دیتابیس
```sql
CREATE DATABASE gavin CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

سپس فایل‌های زیر را به ترتیب اجرا کنید:

1. `database/schema.sql`
2. `database/production-final.sql` (اگر از نسخه قبلی می‌آیید)
3. `database/seed.php` (یک‌بار)

### ۳. تنظیمات
فایل `config/config.php` را ویرایش کنید:

```php
const DB_HOST = 'localhost';
const DB_NAME = 'gavin';
const DB_USER = 'your_user';
const DB_PASS = 'your_password';
const BASE_URL = 'https://yourdomain.com'; // اختیاری
```

### ۴. دسترسی پوشه آپلود
```bash
chmod -R 755 uploads/products
```

### ۵. اجرای Seed
```bash
php database/seed.php
```

> ⚠️ بعد از اجرا حتماً رمزهای پیش‌فرض را تغییر دهید!

---

## 🔐 حساب‌های پیش‌فرض Seed

| نقش | نام | تلفن | رمز عبور |
|-----|-----|------|----------|
| Developer | مدیر توسعه گوین | +989150000000 | ChangeMe123! |
| Seller (مالک) | محمد سیدآبادی | +989150594269 | ChangeMe123! |

---

## 🎨 طراحی

- رنگ‌بندی الهام‌گرفته از طبیعت و صنایع دستی
- فونت **وزیرمتن** (Vazirmatn)
- کاملاً RTL و ریسپانسیو
- تجربه کاربری نرم و مینیمال

---

## 👨‍💻 توسعه‌دهندگان

| | نام | نقش | ارتباط |
|---|-----|------|--------|
| **SJ** | سینا جعفری | توسعه‌دهنده اصلی · طراح UI/UX | [GitHub](https://github.com/sinajr2011-prog) · [Telegram](https://t.me/SiJrOfficial) |
| **MH** | محمدجواد همت‌آبادی | توسعه‌دهنده سیستم و دیتابیس | سروش پلاس |

---

## 📜 لایسنس

این پروژه **خصوصی** است و متعلق به تیم گوین می‌باشد.  
هرگونه کپی یا استفاده تجاری بدون اجازه ممنوع است.

---

<div align="center">

**ساخته شده با ❤️ در ایران**  
از دست تا زندگی · گوین

<br>

[⬆ بازگشت به بالا](#-گوین--gavin-shop)

</div>

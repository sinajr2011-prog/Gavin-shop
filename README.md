<div align="center">

# 🌿 Gavin Shop

### Handmade · Nature · Story

**A premium, production-ready online store for authentic Iranian handicrafts**

[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Status](https://img.shields.io/badge/Status-Production%20Ready-success?style=for-the-badge)]()
[![License](https://img.shields.io/badge/License-Private-red?style=for-the-badge)]()

<br>

[![GitHub](https://img.shields.io/badge/⭐_Star_this_repo-black?style=for-the-badge&logo=github)](https://github.com/sinajr2011-prog/Gavin-shop)

</div>

---

## ✨ About the Project

**Gavin** is a complete, elegant, and production-ready e-commerce platform built specifically for selling handmade Iranian crafts.

It focuses on beautiful design, smooth user experience, real security, and clean architecture — ready for real-world deployment.

### What you get:
- Stunning public storefront with gallery & storytelling pages
- Full order system with province/city-based shipping calculation
- Real-time chat between customer and store owner
- Powerful Seller Panel + Developer Panel
- Notifications, audit logs, and payment gateway management

---

## 🚀 Key Features

### For Customers
- Beautiful homepage with featured products
- Full shop with clean product pages
- Real prices, stock management & add-to-cart
- Smart cart & checkout flow
- Direct chat with the store owner
- Personal account (orders, notifications, profile)

### For Store Owner / Seller
- Complete order management dashboard
- Smart shipping system (province + city + approved rates)
- Product & dynamic category management
- Financial overview & payout requests
- Internal notification system

### For Developer
- Full developer control panel
- Audit logs for every important action
- Payment gateway management
- Seller & order monitoring
- Role-based access control

---

## 🛠️ Tech Stack

| Layer          | Technology                          |
|----------------|-------------------------------------|
| Backend        | PHP 8.1+ (Native)                   |
| Database       | MySQL 8 / MariaDB                   |
| Frontend       | HTML5 · CSS3 · Vanilla JavaScript   |
| Security       | CSRF · Password Hashing · Prepared Statements |
| Architecture   | Clean Structure · Role-based Access · Atomic Transactions |

---

## 📁 Project Structure

```text
Gavin-shop/
├── assets/                 # CSS, JS, gallery images
├── config/                 # Database, auth, helpers
├── account/                # Customer account panel
├── panel/
│   ├── seller/             # Seller panel
│   └── developer/          # Developer panel
├── api/                    # Order API endpoints
├── database/               # Schema, seed & migrations
├── uploads/products/       # Product images (must be writable)
├── index.php
├── shop.php
├── product.php
├── checkout.php
├── chat.php
└── ...
```

---

## ⚙️ Installation

### 1. Clone the repository
```bash
git clone https://github.com/sinajr2011-prog/Gavin-shop.git
cd Gavin-shop
```

### 2. Create the database
```sql
CREATE DATABASE gavin CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Then run these files in order:
1. `database/schema.sql`
2. `database/production-final.sql` (if upgrading)
3. `database/seed.php` (run once)

### 3. Configure
Edit `config/config.php`:

```php
const DB_HOST = 'localhost';
const DB_NAME = 'gavin';
const DB_USER = 'your_user';
const DB_PASS = 'your_password';
const BASE_URL = 'https://yourdomain.com'; // optional
```

### 4. Make uploads writable
```bash
chmod -R 755 uploads/products
```

### 5. Run the seeder
```bash
php database/seed.php
```

> ⚠️ Change the default passwords immediately after seeding!

---

## 🎨 Design Philosophy

- Color palette inspired by nature and traditional crafts
- Clean, modern, fully RTL-ready interface
- Soft shadows, elegant typography, and smooth interactions
- Mobile-first & fully responsive

---

## 👨‍💻 Developer

**Sina Jafari**  
Main Developer & UI/UX Designer

- GitHub: [sinajr2011-prog](https://github.com/sinajr2011-prog)
- Telegram: [@SiJrOfficial](https://t.me/SiJrOfficial)

---

## 📜 License

This project is **private** and owned by the Gavin team.  
Any commercial use or redistribution without permission is strictly prohibited.

---

<div align="center">

**Made with ❤️ in Iran**  
From hand to life · Gavin

<br>

[⬆ Back to top](#-gavin-shop)

</div>

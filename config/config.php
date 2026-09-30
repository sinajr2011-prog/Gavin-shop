<?php
declare(strict_types=1);

/**
 * =====================================================
 *  Gavin Production Config
 *  قبل از دپلوی این مقادیر را پر کنید
 * =====================================================
 */

// ---------- دیتابیس ----------
const DB_HOST = 'localhost';          // معمولاً localhost
const DB_NAME = 'gavin';             // نام دیتابیس
const DB_USER = 'YOUR_DB_USER';      // ← اینجا یوزر دیتابیس را بگذارید
const DB_PASS = 'YOUR_DB_PASSWORD';  // ← اینجا پسورد دیتابیس را بگذارید

// ---------- آدرس سایت ----------
// اگر سایت در ریشه دامنه است خالی بگذارید: ''
// اگر داخل پوشه است مثلاً: 'https://example.com/gavin'
// بدون اسلش در انتها
const BASE_URL = '';

// ---------- مسیر آپلود ----------
const UPLOAD_DIR = __DIR__ . '/../uploads/products/';
const UPLOAD_URL = 'uploads/products/';

// ---------- تنظیمات عمومی ----------
date_default_timezone_set('Asia/Tehran');

// سشن امن‌تر برای پروداکشن
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

/**
 * ساخت URL کامل بر اساس BASE_URL
 */
function url(string $path = ''): string {
    $base = rtrim(BASE_URL, '/');
    $path = ltrim($path, '/');
    return $base === '' ? '/' . $path : $base . '/' . $path;
}

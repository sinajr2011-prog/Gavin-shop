<?php
declare(strict_types=1);

const DB_HOST = 'localhost';
const DB_NAME = 'gavin';
const DB_USER = 'YOUR_DB_USER';
const DB_PASS = 'YOUR_DB_PASSWORD';

const BASE_URL = ''; // Example: https://example.com/gavin
const UPLOAD_DIR = __DIR__ . '/../uploads/products/';
const UPLOAD_URL = 'uploads/products/';

date_default_timezone_set('Asia/Tehran');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

<?php
/**
 * Seed اولیه کاربران سیستم
 * بعد از اجرای این فایل، فوری رمزها را تغییر دهید.
 */
require_once __DIR__ . '/../config/db.php';

$pdo = db();

// ← این رمزها را بعد از اولین ورود حتماً عوض کنید
$accounts = [
    ['مدیر توسعه گوین', '+989150000000', 'developer@gavin.local', 'ChangeMe123!', 'developer', 'active'],
    ['محمد سیدآبادی',  '+989150594269', 'owner@gavin.local',     'ChangeMe123!', 'seller',    'active'],
];

foreach ($accounts as [$name, $phone, $email, $pass, $role, $status]) {
    $st = $pdo->prepare('SELECT id FROM users WHERE role = ? LIMIT 1');
    $st->execute([$role]);
    if (!$st->fetch()) {
        $ins = $pdo->prepare('INSERT INTO users(name, phone, email, password_hash, role, status) VALUES(?,?,?,?,?,?)');
        $ins->execute([$name, $phone, $email, password_hash($pass, PASSWORD_DEFAULT), $role, $status]);
        echo "Created: {$role} → {$phone}\n";
    } else {
        echo "Skipped (already exists): {$role}\n";
    }
}

echo "\n✅ Seed completed.\n";
echo "⚠️  فوری وارد شوید و رمزهای ChangeMe123! را عوض کنید.\n";

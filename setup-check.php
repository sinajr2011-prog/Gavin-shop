<?php
require_once __DIR__.'/config/db.php';
header('Content-Type:text/plain; charset=utf-8');
echo "PHP: ".PHP_VERSION."\n";
echo "PDO MySQL: ".(extension_loaded('pdo_mysql')?'OK':'MISSING')."\n";
echo "Fileinfo: ".(extension_loaded('fileinfo')?'OK':'MISSING')."\n";
try { db()->query('SELECT 1'); echo "Database connection: OK\n"; }
catch(Throwable $e){ echo "Database connection: FAILED\n".$e->getMessage()."\n"; }

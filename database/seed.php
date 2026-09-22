<?php
require_once __DIR__.'/../config/db.php';
$pdo=db();
// Replace these credentials before production deployment.
$accounts=[
 ['مدیر توسعه گوین','+989150000000','developer@gavin.local','ChangeMe123!','developer','active'],
 ['محمد سیدآبادی','+989150594269','owner@gavin.local','ChangeMe123!','seller','active'],
];
foreach($accounts as [$name,$phone,$email,$pass,$role,$status]){
 $st=$pdo->prepare('SELECT id FROM users WHERE role=? LIMIT 1');$st->execute([$role]);
 if(!$st->fetch()){
  $ins=$pdo->prepare('INSERT INTO users(name,phone,email,password_hash,role,status) VALUES(?,?,?,?,?,?)');
  $ins->execute([$name,$phone,$email,password_hash($pass,PASSWORD_DEFAULT),$role,$status]);
 }
}
echo "Seed completed. Change credentials immediately.\n";

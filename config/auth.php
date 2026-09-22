<?php
declare(strict_types=1);
require_once __DIR__ . '/db.php';
function current_user(): ?array { return $_SESSION['user'] ?? null; }
function login_user(array $user): void { session_regenerate_id(true); $_SESSION['user']=['id'=>(int)$user['id'],'name'=>$user['name'],'phone'=>$user['phone']??null,'email'=>$user['email']??null,'role'=>$user['role'],'status'=>$user['status']]; }
function logout_user(): void { $_SESSION=[]; if(ini_get('session.use_cookies')){$p=session_get_cookie_params();setcookie(session_name(),' ',time()-42000,$p['path'],$p['domain'],$p['secure'],$p['httponly']);} session_destroy(); }
function require_role(string $role): void { $u=current_user(); if(!$u||$u['role']!==$role||$u['status']!=='active'){header('Location: /login.php');exit;} }
function require_login(): void { if(!current_user()){header('Location: /login.php');exit;} }
function csrf_token(): string { if(empty($_SESSION['csrf']))$_SESSION['csrf']=bin2hex(random_bytes(32));return $_SESSION['csrf']; }
function verify_csrf(?string $token): void { if(!$token||!hash_equals($_SESSION['csrf']??'',$token)){http_response_code(419);exit('درخواست نامعتبر است.');} }

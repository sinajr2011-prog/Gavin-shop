<?php
declare(strict_types=1);

function e(?string $value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function money(float $value): string {
    return number_format($value, 0, '.', ',') . ' تومان';
}

function slugify(string $text): string {
    $text = trim($text);
    $text = preg_replace('/[^\p{L}\p{N}\s-]+/u', '', $text);
    $text = preg_replace('/[\s-]+/u', '-', $text);
    return trim($text, '-');
}

function unique_slug(PDO $pdo, string $title): string {
    $base = slugify($title) ?: 'product';
    $slug = $base;
    $i = 2;
    $stmt = $pdo->prepare('SELECT id FROM products WHERE slug = ? LIMIT 1');
    while (true) {
        $stmt->execute([$slug]);
        if (!$stmt->fetch()) return $slug;
        $slug = $base . '-' . $i++;
    }
}


function audit_log(PDO $pdo, ?int $actorId, string $action, ?string $entityType=null, ?int $entityId=null, ?string $details=null): void {
    $ip=$_SERVER['REMOTE_ADDR']??null;
    $st=$pdo->prepare('INSERT INTO audit_logs(actor_id,action,entity_type,entity_id,details,ip_address) VALUES(?,?,?,?,?,?)');
    $st->execute([$actorId,$action,$entityType,$entityId,$details,$ip]);
}
function notify_user(PDO $pdo, int $userId, string $title, string $body, string $type='info'): void {
    $st=$pdo->prepare('INSERT INTO notifications(user_id,title,body,type) VALUES(?,?,?,?)');
    $st->execute([$userId,$title,$body,$type]);
}
function approved_shipping_fee(PDO $pdo, string $province, string $city=''): float {
    $province=trim($province); $city=trim($city);
    if($city==='نیشابور') return 0.0;
    $st=$pdo->prepare("SELECT fee FROM shipping_rates WHERE province=? AND status='approved' ORDER BY id DESC LIMIT 1");
    $st->execute([$province]);
    $v=$st->fetchColumn();
    return $v===false ? 0.0 : (float)$v;
}
function fa_order_status(string $s): string { return ['pending'=>'در انتظار پرداخت','paid'=>'پرداخت موفق','processing'=>'در حال آماده‌سازی','shipped'=>'تحویل پست','delivered'=>'تحویل داده شد','cancelled'=>'لغو شده'][$s]??$s; }
function fa_payment_status(string $s): string { return ['unpaid'=>'پرداخت نشده','paid'=>'پرداخت موفق','failed'=>'ناموفق','refunded'=>'مرجوع/بازپرداخت'][$s]??$s; }

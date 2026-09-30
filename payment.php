<?php
require_once __DIR__ . '/config/auth.php';
require_once __DIR__ . '/config/helpers.php';
require_login();

$u  = current_user();
$id = (int)($_GET['order_id'] ?? 0);
$pdo = db();

$st = $pdo->prepare('SELECT * FROM orders WHERE id = ? AND user_id = ?');
$st->execute([$id, $u['id']]);
$o = $st->fetch();

if (!$o) {
    http_response_code(404);
    exit('سفارش پیدا نشد.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf($_POST['csrf'] ?? null);

    // فعلاً فقط رکورد پرداخت ایجاد می‌شود.
    // وقتی درگاه واقعی مشخص شد، اینجا درخواست به درگاه ارسال و authority ذخیره می‌شود.
    $pdo->prepare("INSERT INTO payments(order_id, gateway, amount, status) VALUES(?,?,?,'initiated')")
        ->execute([$id, 'pending_gateway', $o['total']]);

    $ref = $pdo->lastInsertId();
    header('Location: payment.php?order_id=' . $id . '&ready=1&payment=' . $ref);
    exit;
}
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>درگاه پرداخت | گوین</title>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/fonts.css">
</head>
<body>
<main class="section container" style="max-width:700px">
  <div class="card" style="padding:32px">
    <div class="eyebrow">ONLINE PAYMENT</div>
    <h1>پرداخت سفارش #<?= (int)$o['id'] ?></h1>
    <p>مبلغ قابل پرداخت: <strong><?= money((float)$o['total']) ?></strong></p>

    <?php if (isset($_GET['ready'])): ?>
      <div class="notice successbox">
        سفارش برای اتصال به درگاه آماده شد.<br>
        در این نسخه API درگاه واقعی هنوز وصل نشده است.
        به محض مشخص شدن درگاه (زرین‌پال، نکست‌پی و ...)، مرحله درخواست و Verify اینجا متصل می‌شود.
      </div>
      <a class="btn" href="account/orders.php">مشاهده سفارش‌های من</a>
    <?php else: ?>
      <form method="post">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <button class="btn" style="width:100%">پرداخت از طریق درگاه اینترنتی</button>
      </form>
    <?php endif; ?>
  </div>
</main>
</body>
</html>

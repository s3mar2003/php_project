<?php
declare(strict_types=1);

// GET is used here because after the redirect we only display data (no state change)
$username = $_GET['username'] ?? 'Guest';
$color = $_GET['color'] ?? '#000000';

$usernameEsc = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
$colorEsc = htmlspecialchars($color, ENT_QUOTES, 'UTF-8');

date_default_timezone_set('UTC');
$currentTime = date('Y-m-d H:i:s') . ' UTC';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Result</title>
  <style>
    body { font-family: sans-serif; background:#f7f7f7; }
    .card { max-width:420px; margin:60px auto; background:#fff; padding:24px; border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,.08); }
    .swatch { display:inline-block; width:24px; height:24px; border-radius:6px; border:1px solid #ddd; vertical-align:middle; margin-left:.5rem; }
    a { color:#2563eb; text-decoration:none; }
    a:hover { text-decoration:underline; }
  </style>
</head>
<body>
  <div class="card">
    
    <p>Hello, <strong><?= $usernameEsc ?></strong>!</p>

    <p>
      Your favorite color is:
      <span class="swatch" style="background: <?= $colorEsc ?>;"></span>
      <span style="color: <?= $colorEsc ?>; font-weight:700; margin-left:.5rem;">
        <?= $colorEsc ?>
      </span>
    </p>

    <p><strong>Current Server Time:</strong> <?= $currentTime ?></p>

    <p><a href="form.php">Back to form</a></p>
  </div>
</body>
</html>

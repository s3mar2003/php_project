<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $color = trim($_POST['color'] ?? '#000000');

    if (!preg_match('/^#[0-9A-Fa-f]{6}$/', $color)) {
        $color = '#000000';
    }

    $qs = http_build_query([
        'username' => $username,
        'color' => $color,
    ]);

    header("Location: result.php?{$qs}", true, 303);
    exit;
} else {
    echo "Invalid request method. Please submit the form.";
}

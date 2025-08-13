<?php
declare(strict_types=1);

// This page displays the form to enter username and favorite color
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Color Form</title>
  <style>
    body { font-family: sans-serif; background:#f7f7f7; }
    .card { max-width:420px; margin:60px auto; background:#fff; padding:24px; border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,.08); }
    label { display:block; margin:.5rem 0 .25rem; font-weight:600; }
    input[type="text"], input[type="color"] { width:100%; padding:.6rem; border:1px solid #ddd; border-radius:8px; }
    input[type="color"] { height:52px; padding:0; }
    button { width:100%; margin-top:1rem; padding:.8rem; border:0; border-radius:8px; background:#2563eb; color:#fff; font-weight:700; cursor:pointer; }
    button:hover { background:#1e40af; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Enter Your Details</h2>
<!--     POST is preferred here because it securely sends user data and does not show it in the URL
-->
     <form action="process.php" method="POST">
        <label for="username">Name:</label>
        <input type="text" name="username" id="username" required>

        <label for="color">Favorite Color:</label>
        <input type="color" name="color" id="color" value="#ff0000" required>

        <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>

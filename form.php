<?php

declare(strict_types=1);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Form</title>
</head>
<body>
    <h1>Enter Your Name and Favorite Color</h1>
    <form action="result.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="color">Favorite Color:</label>
        <input type="color" id="color" name="color" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

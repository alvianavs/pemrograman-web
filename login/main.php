<?php
session_start();
if (
    !isset($_SESSION['is_login']) ||
    $_SESSION['is_login'] !== true
) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <h2>Selamat datang pada Halaman Admin </h2>
    <br>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
<?php
if (!session_id()) {
    session_start();
}
$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])), 0, strlen(basename($_SERVER['PHP_SELF'])) - 4);
if ((empty($_SESSION['is_login'])) && ($basename != "index")) {
    header('Location: /pemrograman-web/uts/index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI | Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<style>
    .bg-web {
        background-image: url('/pemrograman-web/uts/img/bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        height: 100vh;
    }

    .blur {
        filter: blur(8px);
    }
    .blur-0 {
        z-index: 1080;
        filter: none;
    }
</style>

<body class="bg-web">
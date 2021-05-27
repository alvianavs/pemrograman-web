<?php
session_start();
if (isset($_SESSION['is_login'])) {
    unset($_SESSION['nama']);
    unset($_SESSION['username']);
    unset($_SESSION['is_login']);
}
header('Location: login.php');

<?php
session_start();

$_SESSION['login_userid'] = '1000';
$_SESSION['login_username'] = 'Alvian';
echo "user id = " . $_SESSION['login_userid'] . " dan username = " . $_SESSION['login_username'];

unset($_SESSION['login_userid']);
echo "user id = " . $_SESSION['login_userid'] . " dan username = " . $_SESSION['login_username'];

?>

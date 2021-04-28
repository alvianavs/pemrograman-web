<?php
session_start();

$_SESSION['login_userid'] = '1';
$_SESSION['login_username'] = 'Alvian';

echo "User ID : " . $_SESSION['login_userid'];
echo "<br>Username : " . $_SESSION['login_username'];

?>
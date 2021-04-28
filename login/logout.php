<?php

session_start();
if (isset($_SESSION['is_login']))
{
    unset($_SESSION['is_login']);
}
header('Location: login.php');

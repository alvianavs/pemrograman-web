<?php

session_start();
unset($_SESSION['is_login']);
unset($_SESSION['is_login_google']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['picture']);

session_destroy();

header("Location:index.php");

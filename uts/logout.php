<?php

require_once 'config.php';

unset($_SESSION['facebook_access_token']);


unset($_SESSION['fb_id']);
unset($_SESSION['fb_name']);
unset($_SESSION['fb_email']);
unset($_SESSION['fb_pic']);
unset($_SESSION['is_login']);


header("Location:index.php");

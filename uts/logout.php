<?php

require_once 'config_google.php';

$accesstoken = $_SESSION['access_token'];
$google_client->revokeToken($accesstoken);
 
session_destroy();

header("Location:index.php");

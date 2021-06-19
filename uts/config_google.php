<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google\Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('423104871324-rokljr4nev5mrd1g3fm24hpqcqiq1eov.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('nbS4B3gQPm8bVcS_KVlB9dVU');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/pemrograman-web/uts/index.php');

$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
if(!session_id()){
    session_start();
}

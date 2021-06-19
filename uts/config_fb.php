<?php
define('APP_ID', '2982750458674992');
define('APP_SECRET', '88d977b14e378584a1aaafd2b6db6f8d');
define('API_VERSION', 'v2.5');
define('FB_BASE_URL', 'http://localhost/pemrograman-web/uts/');

if (!session_id()) {
    session_start();
}

require_once 'vendor/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => APP_ID,
    'app_secret' => APP_SECRET,
    'default_graph_version' => API_VERSION,
]);

$helper = $fb->getRedirectLoginHelper();

try {
    if (isset($_SESSION['facebook_access_token'])) {
        $accessToken = $_SESSION['facebook_access_token'];
    } else {
        $accessToken = $helper->getAccessToken();
    }
} catch (Facebook\Exceptions\facebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    // exit;
}
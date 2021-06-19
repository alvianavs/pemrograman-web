<?php
require_once 'config_google.php';
require_once 'koneksi.php';
if (isset($_GET["code"])) {
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    if (!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);

        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($google_client);

        $data = $google_service->userinfo->get();

        $fullname = $data['given_name'] . " " . $data['family_name'];
        
        $sql = "INSERT INTO tb_google_user VALUES('" . $data['id'] . "', '$fullname', '" . $data['email'] . "', '" . $data['picture'] . "')";
        $result = mysqli_query($konek, $sql);
        
        $googleUser = array();
        if (!empty($data['given_name'])) {
            $_SESSION['gu_first_name'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['gu_last_name'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['gu_email'] = $data['email'];
        }

        if (!empty($data['picture'])) {
            $_SESSION['gu_image'] = $data['picture'];
        }

        $_SESSION['is_login'] = true;
    }
    header('Location: dashboard.php');
}
if (!isset($_SESSION['access_token'])) {
    $google_login_url = $google_client->createAuthUrl();
}
?>
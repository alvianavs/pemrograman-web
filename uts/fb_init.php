<?php
require_once 'config_fb.php';
require_once 'koneksi.php';

if (isset($accessToken)) {
    if (isset($_SESSION['facebook_access_token'])) {
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    } else {
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        $oAuth2Client = $fb->getOAuth2Client();
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }
    if (isset($_GET['code'])) {
        $codefb = $_GET['code'];
        header('Location: dashboard.php');
    }
    try {
        $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
        $requestPicture = $fb->get('/me/picture?redirect=false&height=200');
        $picture = $requestPicture->getGraphUser();
        $profile = $profile_request->getGraphUser();
        $fbid = $profile->getId();
        $fbfullname = $profile->getName();
        $fbemail = $profile->getEmail();
        $fbpic = "<img src='" . $picture['url'] . "'/>";
        $srcpic = $picture['url'];

        $sql = "INSERT INTO tb_fb_user VALUES('$fbid', '$fbfullname', '$fbemail', '$srcpic')";
        $result = mysqli_query($konek, $sql);
        
        $_SESSION['fb_id'] = $fbid;
        $_SESSION['fb_name'] = $fbfullname;
        $_SESSION['fb_email'] = $fbemail;
        $_SESSION['fb_pic'] = $fbpic;
        $_SESSION['is_login'] = true;
    } catch (Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();
        header("Location: ./");
        exit;
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit; 
    }
} else {
    $fb_login_url = $helper->getLoginUrl('http://localhost/pemrograman-web/uts/');
}

?>
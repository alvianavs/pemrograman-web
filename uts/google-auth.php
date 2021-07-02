<?php

include 'koneksi.php';
include 'vendor/HttpHelper.php';
if (!session_id())
    session_start();

$GCLIENT_ID = "423104871324-rokljr4nev5mrd1g3fm24hpqcqiq1eov.apps.googleusercontent.com";
$GCLIENT_SECRET = "nbS4B3gQPm8bVcS_KVlB9dVU";

$response = HttpHelper::postApi("https://www.googleapis.com/oauth2/v4/token", [
    "code" => $_GET['code'],
    "client_id" => $GCLIENT_ID,
    "client_secret" => $GCLIENT_SECRET,
    "redirect_uri" => 'http://localhost/pemrograman-web/uts/google-auth.php',
    "grant_type" => 'authorization_code',
]);

if (isset($response->error)) {
    print_r($response);
    die;
}

$info = HttpHelper::getApi("https://www.googleapis.com/oauth2/v1/userinfo", [
    "access_token" => $response->access_token,
], [
    'Authorization' => "Bearer " . $response->access_token,
]);

if (isset($response->error)) {
    echo "Terjadi kesalahan ketika mengambil data";
    die;
}

$qry1 = "SELECT oauth_uid FROM tb_sosmed_user WHERE oauth_uid=".$info->id;
$check = mysqli_query($konek, $qry1);
if (mysqli_num_rows($check) > 0) {
    $_SESSION['is_login'] = true;
    $_SESSION['is_login_google'] = true;
    $_SESSION['username'] = $info->name;
    $_SESSION['email'] = $info->email;
    $_SESSION['picture'] = $info->picture;
    header("Location: dashboard.php");
} else {
    $oauth_provider = "google";
    $gender = null;
    $link = null;
    $qry2 = "INSERT INTO tb_sosmed_user VALUES (NULL, '" . $oauth_provider . "', '" . $info->id . "', '" . $info->name . "', '" . $info->email . "', '" . $gender . "', '" . $link . "', '" . $info->picture . "', NOW(), NOW())";
    
    $check2 = mysqli_query($konek, $qry2);
    if ($check2) {
        $_SESSION['is_login'] = true;
        $_SESSION['is_login_google'] = true;
        $_SESSION['username'] = $info->name;
        $_SESSION['email'] = $info->email;
        $_SESSION['picture'] = $info->picture;
        header("Location: dashboard.php");
    }
}

echo "Terjadi kesalahan";
die;
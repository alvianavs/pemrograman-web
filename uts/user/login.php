<?php

require_once '../koneksi.php';
if (!session_id()) {
    session_start();
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_user WHERE username = '$username'";
    $result = mysqli_fetch_array(mysqli_query($konek, $sql));
    if ($result) {
        if ($password == $result["password"]) {
            $_SESSION['username'] = $username;
            $_SESSION['is_login'] = true;
            header("location:../dashboard.php");
        } else {
            $_SESSION['pesan_error'] = "Password yang anda masukkan salah!";
            header("location:../index.php");    
        }
    } else {
        $_SESSION['pesan_error'] = "Ada yang salah. Silahkan coba lagi.";
        header("location:../index.php");
    }
} else {
    header("location:../index.php");
}

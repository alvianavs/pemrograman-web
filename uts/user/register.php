<?php

require_once '../koneksi.php';
if (!session_id()) {
    session_start();
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO tb_user(username, password, nama, email) VALUES('$username', '$password', '$name', '$email')";
    $result = mysqli_query($konek, $sql);

    if ($result) {
        $_SESSION['pesan'] = "Pendaftaran berhasil. Silahkan login dengan username <b>$username</b> dan password <b>$password</b>";
        header("location:../index.php");
    }
    else
        echo "Please check your query";
} else {
    header("location:../index.php");
}
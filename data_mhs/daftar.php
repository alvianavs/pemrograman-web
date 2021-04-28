<?php
session_start();
include 'config.php';
include 'opendb.php';

if(isset($_POST['submit']))
{
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user VALUES ('$nrp', '$nama', '$alamat', '$tgl_lahir', '$email', '$no_hp', '$username', '$password')";
    $row = mysqli_query($conn, $sql);
    if ($row > 0)
    {
        $_SESSION['pesan'] = "Akun anda berhasil dibuat. Silahkan login";
        header("Location: login.php");
    }
    else
        echo "Insert data gagal";
}

include 'closedb.php';
?>
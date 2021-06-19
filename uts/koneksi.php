<?php
$host = "localhost";
$user = "root";
$psw = "";
$dbname = "uts_siperpus";

$konek = mysqli_connect($host, $user, $psw, $dbname);

if (!$konek) {
    die("Koneksi database gagal : " . mysqli_connect_error());
}

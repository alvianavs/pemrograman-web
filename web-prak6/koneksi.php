<?php
$host = "localhost";
$user = "root";
$psw = "";
$dbname = "db_mahasiswa";

$konek = mysqli_connect($host, $user, $psw, $dbname);

if (!$konek) {
    die("Koneksi database gagal : " . mysqli_connect_error());
}

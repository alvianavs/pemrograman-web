<?php
$predikat;
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

if (is_numeric($nilai) == false) {
    header("location:tugas1.php?nilai=0");
} elseif(!preg_match("/^[a-zA-Z]*$/", $nama)) {
    header("location:tugas1.php?nama=0");
} else {

    if ($nilai > 80 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai > 70 && $nilai <= 80) {
        $predikat = "AB";
    } elseif ($nilai > 65 && $nilai <= 70) {
        $predikat = "B";
    } elseif ($nilai > 59 && $nilai <= 65) {
        $predikat = "BC";
    } elseif ($nilai > 55 && $nilai <= 60) {
        $predikat = "C";
    } elseif ($nilai > 40 && $nilai <= 55) {
        $predikat = "D";
    } elseif ($nilai >= 0 && $nilai <= 40) {
        $predikat = "E";
    } else {
        $predikat = "Tidak ada predikat";
    }

    echo "Nama : $nama <br>";
    echo "Nilai anda adalah $predikat";
}
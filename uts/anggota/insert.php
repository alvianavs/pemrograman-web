<?php
require_once '../koneksi.php';

if (isset($_POST['submit']))
{
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $sql = "INSERT INTO tb_anggota VALUES('$nrp', '$nama', '$tgl_lahir', '$alamat', '$no_hp')";
    $result = mysqli_query($konek, $sql);

    if ($result)
        header("location:main.php");
    else
        echo "Please check your query";
} else {
    header("location:main.php");
}
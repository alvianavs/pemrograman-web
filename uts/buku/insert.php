<?php
require_once '../koneksi.php';

if (isset($_POST['submit']))
{
    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $sql = "INSERT INTO tb_buku VALUES('$kode', '$judul', '$pengarang', '$penerbit')";
    $result = mysqli_query($konek, $sql);

    if ($result)
        header("location:main.php");
    else
        echo "Please check your query";
} else {
    header("location:main.php");
}
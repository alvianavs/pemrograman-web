<?php
require_once '../koneksi.php';

if (isset($_GET['kode']))
{
    $kode = $_GET['kode'];
    $sql = "DELETE FROM tb_buku WHERE kode = '$kode'";
    
    $result = mysqli_query($konek, $sql);

    if ($result) {
        header("location:main.php");
    } else {
        echo "Please check your query";
    }
}

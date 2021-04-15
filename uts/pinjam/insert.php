<?php
require_once '../koneksi.php';

if (isset($_POST['submit']))
{
    $nrp_mhs = $_POST['nrp_mhs'];
    $kode_buku = $_POST['kode_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    
    $sql = "INSERT INTO tb_pinjam (nrp_mhs, kode_buku, tgl_pinjam) VALUES('$nrp_mhs', '$kode_buku', '$tgl_pinjam')";
    $result = mysqli_query($konek, $sql);

    if ($result)
        header("location:index.php");
    else
        echo "Please check your query";
} else {
    header("location:index.php");
}
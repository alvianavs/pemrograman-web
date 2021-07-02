<?php
require_once '../koneksi.php';

if (isset($_POST['submit']))
{
    $nrp_mhs = $_POST['nrp_mhs'];
    $kode_buku = $_POST['kode_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    
    $date = strtotime($tgl_pinjam);
    $date = strtotime("+7 day", $date);
    $batas_waktu = date('Y-m-d', $date);


    $sql = "INSERT INTO tb_pinjam (nrp_mhs, kode_buku, tgl_pinjam, batas_waktu) VALUES('$nrp_mhs', '$kode_buku', '$tgl_pinjam', '$batas_waktu')";
    $result = mysqli_query($konek, $sql);

    if ($result)
        header("location:main.php");
    else
        echo "Please check your query";
} else {
    header("location:main.php");
}
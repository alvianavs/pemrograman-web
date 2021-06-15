<?php
require_once '../koneksi.php';

if (isset($_GET['nrp']))
{
    $nrp = $_GET['nrp'];
    $sql = "DELETE FROM tb_anggota WHERE nrp = " . $nrp;
    $result = mysqli_query($konek, $sql);

    if ($result) {
        header("location:main.php");
    } else {
        echo "Please check your query";
    }
}

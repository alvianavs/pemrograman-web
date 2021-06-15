<?php
require_once '../koneksi.php';

if (isset($_GET['id_pinjam']))
{
    $id_pinjam = $_GET['id_pinjam'];
    $sql = "DELETE FROM tb_pinjam WHERE id_pinjam=" . $id_pinjam;
    
    $result = mysqli_query($konek, $sql);
    if ($result) {
        header("location:main.php");
    } else {
        echo "Please check your query";
    }
}

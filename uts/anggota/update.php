<?php
require_once '../koneksi.php';
$nrpasid = $_GET['nrp'];
if (isset($_POST['update'])) {
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $sql = "UPDATE tb_anggota SET nrp = '" . $nrp . "', nama = '" . $nama . "', tgl_lahir = '" . $tgl_lahir . "', alamat = '" . $alamat . "', no_hp = '" . $no_hp . "' WHERE nrp = '" . $nrpasid . "'";
    $result = mysqli_query($konek, $sql);

    if ($result) {
        header("location:main.php");
    } else {
        echo "Please check your query";
    }
} else {
    header("location:main.php");
}

?>
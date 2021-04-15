<?php
require_once '../koneksi.php';
$get_id = $_GET['id_pinjam'];
if (isset($_POST['update'])) {
    $nrp_mhs = $_POST['nrp_mhs'];
    echo $nrp_mhs;
    $kode_buku = $_POST['kode_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];

    $sql = "UPDATE tb_pinjam SET nrp_mhs = '" . $nrp_mhs . "', kode_buku = '" . $kode_buku . "', tgl_pinjam = '" . $tgl_pinjam . "' WHERE id_pinjam = " . $get_id;
    
    $result = mysqli_query($konek, $sql);

    if ($result) {
        header("location:index.php");
    } else {
        echo "Please check your query";
    }
} else {
    header("location:index.php");
}

?>
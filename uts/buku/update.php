<?php
require_once '../koneksi.php';
$getkode = $_GET['kode'];
if (isset($_POST['update'])) {
    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $sql = "UPDATE tb_buku SET kode = '" . $kode . "', judul = '" . $judul . "', pengarang = '" . $pengarang . "', penerbit = '" . $penerbit . "' WHERE kode = '" . $getkode . "'";
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
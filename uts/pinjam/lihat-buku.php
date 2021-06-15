<?php
include '../header.php';
require_once '../koneksi.php';
$kode = $_GET['kode'];
$sql = "SELECT *FROM tb_buku WHERE kode='$kode'";
$result = mysqli_query($konek, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $kode = $row['kode'];
    $judul = $row['judul'];
    $pengarang = $row['pengarang'];
    $penerbit = $row['penerbit'];
}
?>

<body class="bg-dark">
    <div class="col-lg-6 mx-auto mt-5 card card-body">
        <h4 class="mb-4">Lihat Data Buku</h4>
        <table class="table">
            <tbody>
                <tr>
                    <th style="width:150px">Kode Buku</th>
                    <td>: <?= $kode ?></td>
                </tr>
                <tr>
                    <th style="width:150px">Judul</th>
                    <td>: <?= $judul ?></td>
                </tr>
                <tr>
                    <th style="width:150px">Pengarang</th>
                    <td>: <?= $pengarang ?></td>
                </tr>
                <tr>
                    <th style="width:150px">Penerbit</th>
                    <td>: <?= $penerbit ?></td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <a href="/pemrograman-web/uts/pinjam/main.php" class="btn btn-warning mx-3">
                Kembali
            </a>
        </div>
    </div>

</body>


<?php include '../footer.php'; ?>
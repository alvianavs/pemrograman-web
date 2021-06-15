<?php
include '../header.php';
require_once '../koneksi.php';
$nrp = $_GET['nrp'];
$sql = "SELECT *FROM tb_anggota WHERE nrp=" . $nrp;
$result = mysqli_query($konek, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $nrp = $row['nrp'];
    $nama = $row['nama'];
    $tgl_lahir = $row['tgl_lahir'];
    $alamat = $row['alamat'];
    $no_hp = $row['no_hp'];
}
?>

<body class="bg-dark">
    <br><br><br>
    <div class="col-lg-6 mx-auto card card-body">
        <h4 class="mb-4">Lihat Data Mahasiswa</h4>
        <table class="table">
            <tbody>
                <tr>
                    <th style="width:150px">NRP</th>
                    <td>: <?= $nrp ?></td>
                </tr>
                <tr>
                    <th style="width:150px">Nama</th>
                    <td>: <?= $nama ?></td>
                </tr>
                <tr>
                    <th style="width:150px">Tanggal Lahir</th>
                    <td>: <?= date('d-F-Y', strtotime($tgl_lahir)); ?></td>
                </tr>
                <tr>
                    <th style="width:150px">Alamat</th>
                    <td>: <?= $alamat ?></td>
                </tr>
                <tr>
                    <th style="width:150px">No HP</th>
                    <td>: <?= $no_hp ?></td>
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
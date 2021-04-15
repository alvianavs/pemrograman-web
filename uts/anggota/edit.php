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
    <div class="col-lg-6 mx-auto mt-5 card card-body">
        <form action="update.php?nrp=<?= $nrp ?>" method="POST">
            <h4 class="mb-3">Update data anggota</h4>

            <div class="mb-3 row">
                <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="nrp" value="<?= $nrp ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="<?= $nama ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tglahir" class="col-sm-2 col-form-label">Tanggal lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_lahir" value="<?= $tgl_lahir ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="<?= $alamat ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_hp" value="<?= $no_hp ?>" required>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="/pemrograman-web/uts/anggota/index.php" class="btn btn-warning mx-3">
                    Kembali
                </a>
                <button class="btn btn-success" type="submit" name="update">
                    Update
                </button>
            </div>
        </form>
    </div>

</body>


<?php include '../footer.php'; ?>
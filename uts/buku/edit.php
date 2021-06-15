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
        <form action="update.php?kode=<?= $kode ?>" method="POST">
            <h4 class="mb-3">Update data buku</h4>

            <div class="mb-3 row">
                <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kode" value="<?= $kode ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" value="<?= $judul ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="pengarang" value="<?= $pengarang ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="penerbit" value="<?= $penerbit ?>" required>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="/pemrograman-web/uts/buku/main.php" class="btn btn-warning mx-3">
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
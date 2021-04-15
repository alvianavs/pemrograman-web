<?php
include '../header.php';
require_once '../koneksi.php';
$id_pinjam = $_GET['id_pinjam'];
$sql = "SELECT *FROM tb_pinjam WHERE id_pinjam='$id_pinjam'";
$result = mysqli_query($konek, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $nrp_mhs = $row['nrp_mhs'];
    $kode_buku = $row['kode_buku'];
    $tgl_pinjam = $row['tgl_pinjam'];
}
?>

<body class="bg-dark">
    <div class="col-lg-6 mx-auto mt-5 card card-body">
        <form action="update.php?id_pinjam=<?= $id_pinjam ?>" method="POST">
            <h4 class="mb-4">Update data peminjaman</h4>
            <div class="mb-4 row">
                <label for="nrp_mhs" class="col-sm-3 col-form-label">NRP Mahasiswa</label>
                <div class="col-sm-9">
                    <select class="form-select" name="nrp_mhs" required>
                        <?php
                        $qry = mysqli_query($konek, "SELECT *FROM tb_anggota WHERE nrp=$nrp_mhs");
                        $mhs = mysqli_fetch_assoc($qry);
                        echo "<option value='$nrp_mhs' selected>" . $nrp_mhs . " - " . $mhs['nama'] . " - " . $mhs['no_hp'] . "</option>";
                        ?>
                        <?php
                        $sql = "SELECT *FROM tb_anggota WHERE nrp!=" . $nrp_mhs;
                        $data = mysqli_query($konek, $sql);
                        if (mysqli_num_rows($data) > 0) {
                            while ($row = mysqli_fetch_assoc($data)) {
                                $nrp = $row['nrp'];
                                $nama = $row['nama'];
                                $no_hp = $row['no_hp'];
                        ?>
                                <option value="<?= $nrp ?>"><?= $nrp ?> - <?= $nama ?> - <?= $no_hp ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="nrp_mhs" class="col-sm-3 col-form-label">Kode Buku</label>
                <div class="col-sm-9">
                    <select class="form-select" name="kode_buku" required>
                        <?php
                        $qry = mysqli_query($konek, "SELECT *FROM tb_buku WHERE kode='$kode_buku'");
                        $buku = mysqli_fetch_assoc($qry);
                        echo "<option value='$kode_buku' selected>" . $kode_buku . " - " . $buku['judul'] . "</option>";
                        ?>
                        <?php
                        $sql = "SELECT *FROM tb_buku WHERE kode!='$kode_buku'";
                        $data = mysqli_query($konek, $sql);
                        if (mysqli_num_rows($data) > 0) {
                            while ($row = mysqli_fetch_assoc($data)) {
                                $kode = $row['kode'];
                                $judul = $row['judul'];
                        ?>
                                <option value="<?= $kode ?>"><?= $kode ?> - <?= $judul ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_pinjam" class="col-sm-3 col-form-label">Tanggal Peminjaman</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="tgl_pinjam" value="<?= $tgl_pinjam ?>" required>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="/pemrograman-web/uts/pinjam/index.php" class="btn btn-warning mx-3">
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
<?php
include '../header.php';
include '../navbar.php';
include '../koneksi.php';

$sql = "SELECT *FROM tb_pinjam";
$result = mysqli_query($konek, $sql);
?>
<div class="container my-4">
    <br>
    <h2>Data Peminjaman Buku</h2>

    <div class="card card-body">
        <form action="insert.php" method="POST">

            <div class="mb-3 row">
                <label for="nrp_mhs" class="col-sm-2 col-form-label">NRP Mahasiswa</label>
                <div class="col-sm-10">
                    <select class="form-select" name="nrp_mhs" required>
                        <option value="" selected>- Pilih NRP -</option>
                        <?php
                        $sql = "SELECT *FROM tb_anggota";
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
            <div class="mb-3 row">
                <label for="nrp_mhs" class="col-sm-2 col-form-label">Kode Buku</label>
                <div class="col-sm-10">
                    <select class="form-select" name="kode_buku" required>
                        <option value="" selected>- Pilih Kode -</option>
                        <?php
                        $sql = "SELECT *FROM tb_buku";
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
                <label for="tgl_pinjam" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_pinjam" required>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-success" type="submit" name="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
    <table class="table table-striped border border-light">
        <thead class="bg-primary">
            <tr class="text-light" style="border-style: hidden !important;">
                <th scope="col">No</th>
                <th scope="col">NRP Mahasiswa</th>
                <th scope="col">Kode Buku</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id_pinjam'];
                    $nrp_mhs = $row['nrp_mhs'];
                    $kode_buku = $row['kode_buku'];
                    $tgl_pinjam = $row['tgl_pinjam'];
            ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><a href="lihat-mhs.php?nrp=<?= $nrp_mhs ?>"><?= $nrp_mhs ?></a></td>
                        <td><a href="lihat-buku.php?kode=<?= $kode_buku ?>"><?= $kode_buku ?></a></td>
                        <td><?= date('d-M-Y', strtotime($tgl_pinjam)) ?></td>
                        <td>
                            <a href="edit.php?id_pinjam=<?= $id ?>" class="btn btn-sm btn-success">Edit</a>
                            <a href="delete.php?id_pinjam=<?= $id ?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
            <?php }
            } else {
                $kosong = "<h4 class='d-flex justify-content-center text-danger'>Tidak ada data</h4>";
            }
            ?>
        </tbody>
    </table>
    <?= $kosong ?? '' ?>
</div>
<?php include '../footer.php'; ?>
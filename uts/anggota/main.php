<?php
include '../header.php';
include '../navbar.php';
include '../koneksi.php';

$sql = "SELECT *FROM tb_anggota";
$data = mysqli_query($konek, $sql);
?>
<div class="container my-4">
    <br>
    <h2>Data Anggota</h2>
    <p class="d-flex justify-content-end">
        <button class="btn btn-sm btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#tambahAnggota" aria-expanded="false" aria-controls="tambahAnggota">
            Tambah data anggota
        </button>
    </p>
    <div class="collapse mb-3" id="tambahAnggota">
        <div class="card card-body">
            <form action="insert.php" method="POST">
                <div class="mb-3 row">
                    <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nrp" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglahir" class="col-sm-2 col-form-label">Tanggal lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_lahir" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_hp" required>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-success" type="submit" name="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-striped border border-light shadow">
        <thead class="bg-primary">
            <tr class="text-light" style="border-style: hidden !important;">
                <th scope="col">No</th>
                <th scope="col">NRP</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Hp</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_assoc($data)) {
                    $nrp = $row['nrp'];
                    $nama = $row['nama'];
                    $tgl_lahir = $row['tgl_lahir'];
                    $alamat = $row['alamat'];
                    $nohp = $row['no_hp'];
            ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $nrp ?></td>
                        <td><?= $nama ?></td>
                        <td><?= date('d-m-Y', strtotime($tgl_lahir)); ?></td>
                        <td><?= $alamat ?></td>
                        <td><?= $nohp ?></td>
                        <td>
                            <a href="edit.php?nrp=<?= $nrp ?>" class="btn btn-sm btn-success">Edit</a>
                            <a href="delete.php?nrp=<?= $nrp ?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" class="btn btn-sm btn-danger">Delete</a>
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
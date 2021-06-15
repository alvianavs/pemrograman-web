<?php
include '../header.php';
include '../navbar.php';
include '../koneksi.php';

$sql = "SELECT *FROM tb_buku";
$data = mysqli_query($konek, $sql);
?>
<div class="container my-4">
    <br>
    <h2>Data Buku</h2>
    <p class="d-flex justify-content-end">
        <button class="btn btn-sm btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#addBuku" aria-expanded="false" aria-controls="addBuku">
            Tambah data buku
        </button>
    </p>
    <div class="collapse mb-3" id="addBuku">
        <div class="p-4">
            <form action="insert.php" method="POST">
                <div class="mb-3 row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kode" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pengarang" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penerbit" required>
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
                <th scope="col">Kode</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_assoc($data)) {
                    $kode = $row['kode'];
                    $judul = $row['judul'];
                    $pengarang = $row['pengarang'];
                    $penerbit = $row['penerbit'];
            ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $kode ?></td>
                        <td><?= $judul ?></td>
                        <td><?= $pengarang ?></td>
                        <td><?= $penerbit ?></td>
                        <td>
                            <a href="edit.php?kode=<?= $kode ?>" class="btn btn-sm btn-success">Edit</a>
                            <a href="delete.php?kode=<?= $kode ?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" class="btn btn-sm btn-danger">Delete</a>
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
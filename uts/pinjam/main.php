<?php
include '../header.php';
include '../navbar.php';
include '../koneksi.php';

$sql = "SELECT *FROM tb_pinjam";
$result = mysqli_query($konek, $sql);

if (isset($_POST['submit'])) {
    $id = $_POST['id_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    $qry = "UPDATE tb_pinjam SET tgl_kembali = '$tgl_kembali' WHERE id_pinjam = $id";
    $check = mysqli_query($konek, $qry);
    if ($check)
        header("Location: main.php");
}
?>
<div class="container my-4">
    <br>
    <h3>Form tambah peminjaman</h3>

    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="p-4 shadow">  
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="nrp_mhs" class="form-label">NRP Mahasiswa</label>
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
                    <div class="mb-3">
                        <label for="nrp_mhs" class="form-label">Kode Buku</label>
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
                    <div class="mb-3">
                        <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tgl_pinjam" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success" type="submit" name="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card border-0 shadow">
                <div class="card-header bg-primary text-light fs-5">
                    Info
                </div>
                <div class="card-body">
                    <h5 class="card-title">Perhitungan denda</h5>
                    <p class="card-text">Denda akan diberikan saat melewati batas waktu. Batas waktu dihitung dari 7 hari setelah peminjaman.<br>Jumlah denda dihitung dari banyaknya hari dari batas waktu sampai tanggal kembali dan perharinya akan dikalikan dengan Rp.2000.</p>
                    <button type="button" class="btn btn-sm btn-primary float-end" id="scroll-down"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg></button>
              </div>
          </div>
      </div>
  </div>
  <div class="row mt-4">
    <h3 class="mt-2">Tabel Peminjaman</h3>
    <div class="d-flex justify-content-end align-items-center bg-light p-2 mb-2">
        <span class="me-2">Laporan peminjaman yang sudah dikembalikan</span>
        <a href="cetak-pinjam.php" target="_blank" class="btn btn-success shadow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
          <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
          <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
      </svg> Cetak</a>
  </div>
  <table class="table table-striped border border-light shadow" id="table-content">
    <thead class="bg-primary">
        <tr class="text-light" style="border-style: hidden !important;">
            <th scope="col">No</th>
            <th scope="col">NRP</th>
            <th scope="col">Kode Buku</th>
            <th scope="col">Tanggal pinjam</th>
            <th scope="col">Batas waktu</th>
            <th scope="col">Tanggal kembali</th>
            <th scope="col">Terlambat</th>
            <th scope="col">Denda</th>
        </tr>
    </thead>
    <tbody class="bg-light">
        <?php
        $i = 1;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $t = date_create($row['tgl_kembali']);
                $n = date_create($row['batas_waktu']);
                if ($t < $n) {
                    $hari = 0;

                } else {
                    $terlambat = date_diff($t, $n);

                    $hari = $terlambat->format("%a");
                }
                $denda = $hari * 2000; 
                ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><a href="lihat-mhs.php?nrp=<?= $row['nrp_mhs'] ?>"><?= $row['nrp_mhs'] ?></a></td>
                    <td><a href="lihat-buku.php?kode=<?= $row['kode_buku'] ?>"><?= $row['kode_buku'] ?></a></td>
                    <td><?= date('d-M-Y', strtotime($row['tgl_pinjam'])) ?></td>
                    <td><?= date('d-M-Y', strtotime($row['batas_waktu'])) ?></td>
                    <?php if ($row['tgl_kembali'] == NULL) { ?>
                        <td><button class="badge bg-success border-0" data-bs-toggle="modal" data-bs-target="#modal<?= $row['id_pinjam'] ?>">Tambahkan</button></td>
                        <td></td>
                        <td></td>

                    <?php } else { ?>
                        <td><?= date('d-M-Y', strtotime($row['tgl_kembali'])) ?></td>
                        <td><?= $hari ?> hari</td>
                        <?php
                        if ($hari == 0)
                            echo '<td><span class="badge bg-success">Tidak terlambat</span></td>';
                        else
                            echo "<td><span class='badge bg-danger'>Rp. $denda </span></td>";
                        ?>
                    <?php } ?>
                </tr>
                <div class="modal fade" id="modal<?= $row['id_pinjam'] ?>" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Tambahkan tanggal pengembalian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                                <input type="hidden" name="id_pinjam" value="<?= $row['id_pinjam'] ?>">
                                <input type="date" class="form-control" name="tgl_kembali" required>
                            </div>
                            <div class="float-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    $kosong = "<h4 class='d-flex justify-content-center text-danger'>Tidak ada data</h4>";
}
?>
</tbody>
</table>
<?= $kosong ?? '' ?>   
</div>
</div>
<?php include '../footer.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laporan peminjaman</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<table class="table table-striped border border-light">
		<thead>
			<tr>
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
			require_once '../koneksi.php';
			$result = mysqli_query($konek, "SELECT * FROM tb_pinjam WHERE tgl_kembali != ''");
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
						<td><?= $row['nrp_mhs'] ?></td>
						<td><?= $row['kode_buku'] ?></td>
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
								echo "<td>Tidak terlambat</td>";
							else
								echo "<td>Rp. " . $denda . "</td>";
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
			}
			?>
		</tbody>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>
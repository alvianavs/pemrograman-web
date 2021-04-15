<?php
include 'koneksi.php';
// 	nrp	nama	jk	jurusan	email	alamat	no_hp	asal_sma	matkul_favorit
$query = "INSERT INTO biodata VALUES(3120510407, 'Avis Alvian', 'Laki-Laki', 'Teknik Informatika', 'avisalvian44@gmail.com', 'Ponorogo', '08970586458', 'SMKN 1 Jenangan', 'Pemrograman Web')";

if (mysqli_query($konek, $query))
    echo "Data baru berhasil ditambahkan";
else
    echo "Error : " . $query . "<br>" . mysqli_error($konek);

mysqli_close($konek);
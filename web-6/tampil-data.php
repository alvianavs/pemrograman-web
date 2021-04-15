<?php
include 'koneksi.php';
// 	nrp	nama	jk	jurusan	email	alamat	no_hp	asal_sma	matkul_favorit
$query = "SELECT *FROM biodata";
$data = mysqli_query($konek, $query);

if (mysqli_num_rows($data))
{
    while ($row = mysqli_fetch_assoc($data)) {
        echo "NRP : " . $row['nrp'] . "<br>";
        echo "Nama : " . $row['nama'] . "<br>";
        echo "Jenis Kelamin : " . $row['jk'] . "<br>";
        echo "Jurusan : " . $row['jurusan'] . "<br>";
        echo "Email : " . $row['email'] . "<br>";
        echo "Alamat : " . $row['alamat'] . "<br>";
        echo "No HP : " . $row['no_hp'] . "<br>";
        echo "Asal SMA : " . $row['asal_sma'] . "<br>";
        echo "Matkul Favorit : " . $row['matkul_favorit'] . "<br>";
    }
}
else
    echo "0 Result";

mysqli_close($konek);

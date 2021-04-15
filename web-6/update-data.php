<?php
include 'koneksi.php';

$query = "UPDATE biodata SET jurusan = 'D3 PJJ Teknik Informatika' WHERE nrp = 3120510407";

if (mysqli_query($konek, $query))
    echo "Data berhasil diupdate";
else
    echo "Error : " . $query . "<br>" . mysqli_error($konek);

mysqli_close($konek);

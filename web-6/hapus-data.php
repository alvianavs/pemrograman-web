<?php
include 'koneksi.php';

$query = "DELETE FROM biodata WHERE nrp = 3120510407";

if (mysqli_query($konek, $query))
    echo "Data berhasil dihapus";
else
    echo "Error : " . $query . "<br>" . mysqli_error($konek);

mysqli_close($konek);

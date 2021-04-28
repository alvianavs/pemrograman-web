<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prak 8 - Session</title>
</head>
<body>
    <h2>Membuat Variabel Session</h2>
    <?php
    $_SESSION['warna'] = 'biru';
    $_SESSION['hewan'] = 'kucing';
    echo "Variabel session telah diset.";
    ?>
    <br><br>
    <a href="session2.php">Pindah ke halaman lain</a>
</body>

</html>
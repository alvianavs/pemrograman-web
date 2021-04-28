<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prak 8 - Session</title>
</head>
<body>
    <h2>Mengakses Session</h2>
    <?php
    echo "Warna favorit adalah " . $_SESSION['warna'] . ".<br>";
    echo "Hewan favorit adalah " . $_SESSION['hewan'] . ".";
    ?>
</body>

</html>
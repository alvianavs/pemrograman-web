<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prak 8 - Session</title>
</head>
<body>
    <h2>Menghapus Session</h2>
    <?php
    session_unset();
    session_destroy();
    echo "Session telah dihapus";
    ?>
    <br>
    <a href="session2.php">Kehalaman ini untuk akses session</a>
</body>

</html>
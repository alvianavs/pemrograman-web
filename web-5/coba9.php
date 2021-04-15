<!DOCTYPE html>
<html>
<head>
    <title>Percobaan 9</title>
</head>
<body>
    <?php
    error_reporting(0);
    if ($_GET["nama"] == "0") {
        $nama_str = "<p style='color:red'>Nama Belum Diisi !</p>";
    } else {
        $nama_str = "";
    }
    ?>
    <form action="act-coba9.php" method="post">
        <fieldset>
            Nama <br />
            <input type="text" name="nama"><?php echo $nama_str ?><br>

            <br />
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>
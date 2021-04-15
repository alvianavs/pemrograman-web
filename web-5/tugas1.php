<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas 1</title>
</head>

<body>

    <?php
    error_reporting(0);
    if ($_GET["nama"] == "0") {
        $nama_str = "<p style='color:red'>Nama harus huruf!</p>";
    } else {
        $nama_str = "";
    }
    if ($_GET["nilai"] == "0") {
        $nilai_str = "<p style='color:red'>Nilai harus angka!</p>";
    } else {
        $nilai_str = "";
    }
    ?>
    <form action="act-tugas1.php" method="post">
        <fieldset>
            <h3>Form</h3>
            Nama <br />
            <input type="text" name="nama" required><?php echo $nama_str ?><br><br>

            Nilai angka <br />
            <input type="text" name="nilai" required><?php echo $nilai_str ?><br>

            <br />
            <input type="submit">
        </fieldset>
    </form>
</body>

</html>
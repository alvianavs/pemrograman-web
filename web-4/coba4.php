<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 4</title>
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .error {
        color: red;
        font-size: 12px;
    }
    button {
        width: 60px;
        height: 25px;
        background-color: limegreen;
        color: white;
        border: 0;
    }
</style>
<body>
    <?php
    $namaErr = $emailErr = $jkErr = $komenErr = $websiteErr = "";
    $nama = $email = $jk = $komen = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namaErr = "Kolom nama harus diisi";
        } else {
            $nama = input($_POST["nama"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "Kolom email harus diisi";
        } else {
            $email = input($_POST["email"]);
        }
        if (empty($_POST["jk"])) {
            $jkErr = "Pilihan jenis kelamin harus diisi";
        } else {
            $jk = input($_POST["jk"]);
        }
        if (empty($_POST["website"])) {
            $websiteErr = "";
        } else {
            $website = input($_POST["website"]);
        }
        if (empty($_POST["komen"])) {
            $komenErr = "";
        } else {
            $komen = input($_POST["komen"]);
        }
    }

    function input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>PHP Form Validation Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Nama<br>
        <input type="text" name="nama">
        <span class="error">* <?php echo $namaErr; ?></span><br>

        Email<br>
        <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span><br>

        Website<br>
        <input type="text" name="website">
        <span class="error"><?php echo $websiteErr; ?></span><br>

        Komentar<br>
        <textarea name="komen" cols="40" rows="5"></textarea><br>
        <span class="error"><?php echo $komenErr; ?></span><br>

        Jenis Kelamin<br>
        <input type="radio" name="jk" value="pria">Pria
        <input type="radio" name="jk" value="wanita">Wanita
        <input type="radio" name="jk" value="genderless">Genderless
        <span class="error">* <?php echo $jkErr; ?></span><br><br>

        <button type="submit">Kirim</button>
    </form>

    <h2>Hasil input :</h2>
    <?php
    echo "<b>Nama</b> : " . $nama . "<br>";
    echo "<b>Email</b> : " . $email . "<br>";
    echo "<b>Website</b> : " . $website . "<br>";
    echo "<b>Jenis Kelamin</b> : " . $jk . "<br>";
    echo "<b>Komentar</b> : " . $komen . "<br>";
    ?>
</body>

</html>
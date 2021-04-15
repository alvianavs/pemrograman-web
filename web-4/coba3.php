<!DOCTYPE html>
<html lang="en">

<head>
    <title>Percobaan 3</title>
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    input[type="submit"] {
        width: 60px;
        height: 25px;
        background-color: limegreen;
        color: white;
        border: 0;
    }
</style>

<body>
    <?php
    $nama = $email = $jk = $komen = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = input($_POST["nama"]);
        $email = input($_POST["email"]);
        $jk = input($_POST["jk"]);
        $komen = input($_POST["komen"]);
        $website = input($_POST["website"]);
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
        <input type="text" name="nama"><br>

        Email<br>
        <input type="text" name="email"><br>

        Website<br>
        <input type="text" name="website"><br>

        Komentar<br>
        <textarea name="komen" cols="40" rows="5"></textarea><br>

        Jenis Kelamin<br>
        <input type="radio" name="jk" value="pria">Pria
        <input type="radio" name="jk" value="wanita">Wanita
        <input type="radio" name="jk" value="genderless">Genderless
        <br><br>

        <input type="submit" name="submit" value="Kirim">
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
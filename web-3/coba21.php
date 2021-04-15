<!DOCTYPE html>
<html lang="en">

<head>
    <title>Percobaan 21</title>
</head>

<body>
    <?php
    $tme = date("H");
    echo "Sekarang jam $tme <br>";

    if ($tme < "20") {
        echo "Semoga harimu menyenangkan!";
    } else {
        echo "Semoga tidurmu nyenyak!";
    }
    ?>
</body>

</html>
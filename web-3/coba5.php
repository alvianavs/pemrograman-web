<!DOCTYPE html>
<html lang="en">

<head>
    <title>Percobaan 5</title>
</head>

<body>
    <?php
    $x = 8823;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "8823";
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "88.23" + 100;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "Hellow";
    var_dump(is_numeric($x));
    ?>
</body>

</html>
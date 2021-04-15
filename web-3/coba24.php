<!DOCTYPE html>
<html lang="en">

<head>
    <title>Percobaan 23</title>
</head>

<body>
    <?php
    $x = 1;
    echo "While<br>";
    while($x <= 5) {
        echo "Looping ke-$x <br>";
        $x++;
    }

    echo "<br>Do While<br>";
    $y = 1;
    do {
        echo "Looping ke-$y <br>";
        $y++;
    } while ($y <= 5);

    echo "<br>For<br>";
    for ($z = 0; $z <= 5; $z++) {
        echo "Looping ke-$z <br>";
    }

    echo "<br>Foreach<br>";
    $colors = array("red", "yellow", "blue", "green");
    foreach ($colors as $val) {
        echo "$val <br>";
    }
    ?>
</body>

</html>
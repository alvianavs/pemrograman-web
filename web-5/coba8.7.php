<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 8.7</title>
</head>
<body>
    <?php
    $dt = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $dt) . "<br>";

    $dt = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $dt) . "<br>";

    $dt = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $dt) . "<br>";
    ?>
</body>
</html>
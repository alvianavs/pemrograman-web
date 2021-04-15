<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 8.8</title>
</head>
<body>
    <?php
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }
    ?>
</body>
</html>
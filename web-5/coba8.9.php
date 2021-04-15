<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 8.9</title>
</head>
<body>
    <?php
    $dt1 = strtotime("May 01");
    $dt2 = ceil(($dt1-time())/60/60/24);
    echo "There are " . $dt2 . " days until 1st of May";
    ?>
</body>
</html>
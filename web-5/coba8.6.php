<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 8.6</title>
</head>
<body>
    <?php
    $dt = strtotime("10:00pm March 24 2020");
    echo "Create date is " . date("Y-m-d h:i:sa", $dt);
    ?>
</body>
</html>
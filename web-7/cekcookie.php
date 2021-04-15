<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 2</title>
</head>
<body>
    <h2>Accessing cookie with PHP</h2>
    <?php
    if (isset($_COOKIE['name']))
        echo "Welcome " . $_COOKIE['name'] . "<br>";
    else
        echo "Sorry.. not recognized.<br>";
    ?>
</body>
</html>
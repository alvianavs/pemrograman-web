<?php
setcookie("name", "Avis Alvian", time() + 3600, "/", "", 0);
setcookie("age", "19", time() + 3600, "/", "", 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 1</title>
</head>
<body>
    <h2>Setting cookies with PHP</h2>
    <?php echo "Set cookies" ?>
</body>
</html>
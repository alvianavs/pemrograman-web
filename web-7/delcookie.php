<?php
setcookie("name", "", time()-60, "/", "", 0);
setcookie("age", "", time()-60, "/", "", 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 4</title>
</head>
<body>
    <h2>Deleting cookies with PHP</h2>

    <?php echo "Deleted cookies" ?>
</body>
</html>
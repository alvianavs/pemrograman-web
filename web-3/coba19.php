<!DOCTYPE html>
<html lang="en">

<head>
    <title>Percobaan 19</title>
</head>

<body>
    <?php
    echo $status = empty($user) ? "anonymous" : "logged in";
    echo "<br>";
    
    $user = "Alvian";
    echo $status = empty($user) ? "anonymous" : "logged in";
    ?>
</body>

</html>
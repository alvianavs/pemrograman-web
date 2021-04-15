<!DOCTYPE html>
<html lang="en">

<head>
    <title>Percobaan 23</title>
</head>

<body>
    <?php
    $favColor = "purple";

    switch ($favColor) {
        case "red":
            echo "Warna favorit kamu adalah merah";
            break;
        case "purple":
            echo "Warna favorit kamu adalah ungu";
            break;
        case "pink":
            echo "Warna favorit kamu adalah pink";
            break;
        default:
            echo "Warna favorit kamu bukan merah, ungu, atau pink";
    }
    ?>
</body>

</html>
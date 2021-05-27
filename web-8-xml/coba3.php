<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 03</title>
</head>
<body>
    <h3>Percobaan 03: how to use simplexml_load_file() function to read xml data from a file</h3>

    <?php
    $xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
    print_r($xml);
    ?>
</body>
</html>
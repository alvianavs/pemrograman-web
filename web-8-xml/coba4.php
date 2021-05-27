<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 04</title>
</head>

<body>
    <h3>Percobaan 04: how to use simplexml_load_file() function to read xml data from a file</h3>

    <?php
    $xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
    echo $xml->to . "<br>";
    echo $xml->from . "<br>";
    echo $xml->heading . "<br>";
    echo $xml->body;
    ?>
</body>

</html>
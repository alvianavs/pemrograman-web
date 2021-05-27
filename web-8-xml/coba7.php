<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 07</title>
</head>
<body>
    <h3>Percobaan 07: how to use simplexml_load_file() function to read xml data from a file</h3>

    <?php
    $xml = simplexml_load_file("book.xml") or die("Error: Cannot create object");
    echo $xml->book[0]['category'] . "<br>";
    echo $xml->book[1]->title['lang'];
    ?>
</body>
</html>
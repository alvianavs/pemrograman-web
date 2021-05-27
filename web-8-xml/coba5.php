<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 05</title>
</head>
<body>
    <h3>Percobaan 05: how to use simplexml_load_file() function to read xml data from a file</h3>

    <?php
    $xml = simplexml_load_file("book.xml") or die("Error: Cannot create object");
    echo $xml->book[0]->title . "<br>";
    echo $xml->book[1]->title;
    ?>
</body>
</html>
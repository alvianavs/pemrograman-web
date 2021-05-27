<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 08</title>
</head>
<body>
    <h3>Percobaan 08: how to use simplexml_load_file() function to read xml data from a file</h3>

    <?php
    $xml = simplexml_load_file("book.xml") or die("Error: Cannot create object");
    foreach($xml->children() as $book) {
        echo $book->title['lang'] . "<br>";
    }
    ?>
</body>
</html>
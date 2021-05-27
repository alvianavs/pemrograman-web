<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 06</title>
</head>
<body>
    <h3>Percobaan 06: how to use simplexml_load_file() function to read xml data from a file</h3>

    <?php
    $xml = simplexml_load_file("book.xml") or die("Error: Cannot create object");
    foreach($xml->children() as $book) {
        echo $book->title . ", ";
        echo $book->author . ", ";
        echo $book->year . ", ";
        echo $book->price . "<br>";
    }
    ?>
</body>
</html>
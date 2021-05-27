<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 01</title>
</head>
<body>
    <h3>Percobaan 01 : the simplexml_load_string() function to read XML data from a string</h3>

    <?php
    $myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
    <note>
        <to>Tove</to>
        <from>Jenny</from>
        <heading>Reminder</heading>
        <body>Don't forget me this weekend!</body>
    </note>";
    $xml = simplexml_load_string($myXMLData) or die("Error : Cannot create object");
    print_r($xml);
    ?>
</body>
</html>
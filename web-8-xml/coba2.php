<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percobaan 02</title>
</head>
<body>
    <h3>Percobaan 02 : this example tries to load a broken XML string</h3>

    <?php
    libxml_use_internal_errors(true);
    $myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
    <document>
        <user>John Doe</wronguser>
        <email>john@example.com</wrongemail>
    </document>";

    $xml = simplexml_load_string($myXMLData);
    if ($xml == false) {
        echo "Failed load XML: ";
        foreach(libxml_get_errors() as $err) {
            echo "<br>" , $err->message;
        }
    } else {
        print_r($xml);
    }
    ?>

</body>
</html>
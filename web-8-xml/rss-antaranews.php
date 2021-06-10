<!DOCTYPE html>
<html lang="en">
<head>
    <title>RSS AntaraNews</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .header {
        text-align: center;
        padding-top: 10px;
        padding-bottom: 35px;
        margin: 0 10px;
        border-bottom: 3px solid lightblue;
    }
    img {
        width: 50%;
        height: auto;
        margin: 0 10px 10px 10px;
        border-radius: 4px;
    }
    .container {
        margin: 20px 20%;
    }
    .item {
        display: inline-block;
        padding: 16px;
        border-radius: 10px;
        box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.2), 0 4px 18px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 20px;
    }
</style>
<body>
    <div class="header">
        <?php
        $xml = simplexml_load_file("https://www.antaranews.com/rss/terkini.xml") or die("Error: Cannot create object");
        echo "<h1>" . $xml->channel->title . "</h1>";
        echo "<h4>" . $xml->channel->description . "</h4>";
        echo "<a href='" . $xml->channel->link . "'>www.antaranews.com</a>";
        ?>
    </div>
    <div class="container">
        <?php

        $i = 1;
        echo "<br>";
        foreach ($xml->channel->item as $item) {
            $dtime = explode('+', $item->pubDate);
            echo "<div class='item'>";
            echo "<h2>" . $item->title . "</h2>";
            echo "<div style='margin-bottom:5px;'>" . $dtime[0] . "</div><br>";
            echo $item->description;
            echo "<a href='" . $item->link . "'>  lanjut baca</a></div>";
            if ($i >= 4) break;
            $i++;
        }
        ?>
    </div>
</body>
</html>
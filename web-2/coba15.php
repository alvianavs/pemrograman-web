<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $x = 10;
    $y = 20;
    function myFun()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myFun();
    echo $y;
    ?>
</body>

</html>
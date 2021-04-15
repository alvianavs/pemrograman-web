<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $x = 10;
    $y = 20;
    function myFun()
    {
        global $x, $y;
        $y = $x + $y;
    }
    myFun();
    echo $y;
    ?>
</body>

</html>
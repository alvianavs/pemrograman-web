<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    function myFun()
    {
        static $x = 0;
        echo $x;
        $x++;
    }
    myFun();
    echo "<br>";
    myFun();
    echo "<br>";
    myFun();
    ?>
</body>

</html>
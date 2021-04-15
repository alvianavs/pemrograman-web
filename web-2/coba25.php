<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    class Car {
        function car() {
            $this->model = "BMW";
        }
    }

    $m3 = new Car();
    echo $m3->model;
    ?>
</body>

</html>
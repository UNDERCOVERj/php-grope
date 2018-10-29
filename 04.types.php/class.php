<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        class Car {
            var $color;
            function Car($color = "green") {
                $this->color = $color;
            }
            function whatColor() {
                return $this->$color;
            }
        }
        $car = new Car();
        echo(json_encode($car));
        foreach (get_object_vars($car) as $prop => $val) {
            echo "$prop=$val<br>";
        }
    ?>
</body>
</html>
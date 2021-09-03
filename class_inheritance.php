
<?php 

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels() {
    // => keyword $this refere to class name (Car) inside the class
       $this->wheels = 10;
    }

    function createDoors() {
        $this->doors = 6;
    }
}

// => create instances of a Class
$bmw = new Car();

class Plane extends Car {
var $wheels = 16;
}

$jet = new Plane();
// $jet->moveWheels();
echo $jet->wheels;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
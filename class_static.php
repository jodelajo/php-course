
<?php 

class Car {
    // => static: attached to class, not to instance (can be used whitout instances)
    static $wheels = 4;
    var $hood = 1;
  

    function moveWheels() {
    // => keyword $this refere to class name (Car) inside the class
    //    $this->wheels = 10;
    // => static method:
    Car::$wheels = 100;
    }
}

// => create instances of a Class
$bmw = new Car();

// deprecated???
// Car::moveWheels();


// echo $bmw->wheels;

echo Car::$wheels;


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
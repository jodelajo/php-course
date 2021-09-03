
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
$truck = new Car();

echo "wheels bmw: " . $bmw->wheels . "<br>";
echo "wheels truck: " . $truck->wheels = 10 . "<br>";
echo "doors bmw: " . $bmw->doors . "<br>";
$truck->createDoors();
echo "doors truck: " . $truck->doors;
// $mercedes = new Car();

// => execute methods
// $bmw->moveWheels();
// $mercedes->moveWheels();

// $bmw->wheels = 8;
// echo $bmw->wheels;

// => find classes and methods (functions)
// if (Class_exists("Car")) {
//     echo "Yes it does class";
// } else {
//     echo "no";
// }
// if (method_exists("Car", "moveWheels")) {
//     echo "Yes it does method";
// } else {
//     echo "no";
// }


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
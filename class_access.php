
<?php 

class Car {

    // variations on var with specific (public: all over available, protected: only in spec class or subclasses, private: (only inside spec class not in sub or outside))
    public $wheels = 4; 
    protected $hood = 1;
    private $engine = 1;
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
echo $bmw->wheels;



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
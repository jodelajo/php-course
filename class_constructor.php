
<?php 

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    // construct method is getting executed immidiatly when instance is created
    function __construct()  {
        echo $this->wheels = 10;
    }
}

$bmw = new Car();


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
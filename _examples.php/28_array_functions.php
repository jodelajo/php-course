<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

$list = [343,34,323,23,54,232,453];

echo max($list);
//max value

echo "<br>";
    
echo min($list);
//min value


echo "<br>";

sort($list);
//eerst sorteren dan => print_r
    
print_r($list);
//hele lijst


?>

</body>
</html>
<?php 

$name = "Jodelajo";
$value = "poep";
//(60*60*24*7) = 1 week
$expiration = time() + (60*60*24*7*52);

setcookie($name, $value, $expiration);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
 $someOne = $_COOKIE[$name];

    if(isset($someOne)) {
        echo $someOne;
    } else {
        $someOne = "";
    }
?>

</body>
</html>
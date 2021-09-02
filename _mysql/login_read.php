<?php 

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if($connection) {
    echo "yes connected";
} else {
    die("fail");
}

$query = "SELECT * FROM  USERS";
$result = mysqli_query($connection, $query);

if(!$result) {
    die( "failed" . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <div clas="col-sm-6">

    <?php 
    while($row = mysqli_fetch_assoc($result)) {
    ?>
        <pre>
            <?php 
            print_r($row);
            ?>
        </pre>
    <?php
}
?>
    </div>



</main>

</body>
</html>
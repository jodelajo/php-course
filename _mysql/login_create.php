<?php 



if(isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if($connection) {
    echo "yes connected";
} else {
    die("fail");
}

$query = "INSERT INTO users(username, password)";
$query .= "VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

if(!$result) {
    die("failed");
}

//   if($username && $password) {
//     echo $username . '<br>';
//     echo $password;
//   } else {
//       echo "nooooo";
//   }
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
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
        <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </form>
</main>

</body>
</html>
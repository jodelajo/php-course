<?php include "db.php";

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
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->
</head>
<body>
<main class="container">
    <div clas="col-sm-6">
    <form action="login_create.php" method="post">
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
        <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
        <select name="select" id="">
            <option value="">1</option>
        </select>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
    </form>

    </div>
</main>

</body>
</html>
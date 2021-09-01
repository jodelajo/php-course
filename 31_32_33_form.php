<?php 

if(isset($_POST['submit'])) {
    
$name = ["Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "tom"];
    
    $minimum = 5;
    $maximum = 10;

$username = $_POST['username'];
$password = $_POST['password'];
    
  if(strlen($username) < $minimum ) {
      echo "Username has to be longer than five";
  }  
    
    if(strlen($username) > $maximum  ) {
      echo "Username cannot be longer than 10 ";
  }  
    
    if(!in_array($username,$name)) {
        echo " Sorry you are not allowed";
    } else {
    
    echo "Welcome " . $username . '<br/>';
    echo "Your Password is " . $password;

    }
 
    
// echo "Hello" . $username;   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="31_32_33_form.php" method="post">
    
<input type="text" name="username" placeholder="Enter Username"><br>
<input type="password"  name="password" placeholder="Enter Password"><br>
<input type="submit" name="submit">
    
    
</form>



</body>
</html>
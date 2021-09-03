<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<?php session_start();

$_SESSION['greeting'] = "hello jodelajo, topper";

$name = "Jodelajo";
$value = "session value";
//(60*60*24*7) = 1 week
$expiration = time() + (60*60*24*7*52);

setcookie($name, $value, $expiration);
?>
	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	<?php 

		/*  Create a link saying Click Here, and set 
		the link href to pass some parameters and use the GET super global to see it

			Step 2 - Set a cookie that expires in one week

			Step 3 - Start a session and set it to value, any value you want.
		*/
		$id = 10;
		$button = "click here";
	?>


<?php 
 $someOne = $_COOKIE[$name];

    if(isset($someOne)) {
		echo $someOne . "<br>";
    } else {
        $someOne = "";
    }

	echo $_SESSION['greeting'] . "<br/>";
	
	if (isset($_GET['id']))
	echo "id " . $id . "<br/>";

?>

<a href="9.php?id=<?php echo $id; ?>"><?php echo $button; ?></a>
</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
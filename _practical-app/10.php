<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  Step 1: Use the Make a class called Dog
		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
		Step 4: Make a method named ShowAll that echos all the properties
		Step 5: Instantiate the class / create object and call it pitbull
		Step 6: Call the method ShowAll	
	*/

	class Dog {
		var $colorEyes = "green";
		var $ears = 2;
		var $gender = "female";

		function showAll() {
			// var_dump(get_class_vars('Dog'));
			echo $this->colorEyes . "<br>";
			echo $this->ears  . "<br>";
			echo $this->gender  . "<br>";
		}
	}

	$brutus = new Dog();
	$brutus->showAll();
	?>

</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
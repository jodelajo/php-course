<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

/*  Step1: Use a pre-built math function here and echo it
	Step 2:  Use a pre-built string function here and echo it
	Step 3:  Use a pre-built Array function here and echo it
 */

echo rand(1, 10);
//random
echo "<br>";

$string = 'Aloha';
echo strtoupper($string);
echo "<br>";

$ARRAY = [2,3,4,5, $string];

// echo min($ARRAY);
echo "<br>";
$found = in_array(6, $ARRAY);
// echo $found;
if($found) {
	echo "wow";
}else {
	echo "shit";
}	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
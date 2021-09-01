<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
	Step 2: Make a forloop  that displays 10 numbers
	Step 3 : Make a switch Statement that test againts one condition with 5 cases
 */

if (3 > 8) {
	echo "bla";
} elseif(3 < 2) {
	echo " bla bla";
} else {
	echo "I love php";
}
 echo '<br>';

for($counter=1; $counter <= 10; $counter++)
echo $counter;

echo '<br>';

$name = 'joan!';
switch($name){
	case 'jo':
	echo 'not good';
	break;
	case 'joan':
	echo 'not good';
	break;
	case 'joanne':
	echo 'not good';
	break;
	case 'joanneke':
	echo 'very good';
	break;

	default:
	echo 'jodelajo the php master';
	break;
}


?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>
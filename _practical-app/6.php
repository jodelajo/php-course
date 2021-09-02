<?php include "functions.php" ?>
<?php include "includes/header.php" ?>


	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="6_form.php" method="post">
    
<input type="text" name="username" placeholder="Enter Username"><br/>
<!-- <input type="password"  name="password" placeholder="Enter Password"><br> -->
<input type="submit" name="submit">
    
    
</form>



</body>
</html>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
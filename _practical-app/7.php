<?php include "functions.php" ?>
    
<?php
$connection = mysqli_connect('localhost', 'root', '', 'section_seven');
if(!$connection) {
	global $connection;
    die("fail") . mysqli_error($connection);
} 

function showAllData() {
    global $connection;
    $query = "SELECT * FROM  USERS";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die( "failed" . mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    } 
}

function readData() {
    global $connection;
    $query = "SELECT * FROM  USERS";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die( "failed" . mysqli_error($connection));
}
    while($row = mysqli_fetch_assoc($result)) {
                print_r($row);
    }
}
?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
?>
<pre>
	<?php readData(); ?>
</pre>

</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>

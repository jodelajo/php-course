<?php 

$file = "delete_test.php";
chmod($file, 0755);
// fclose($file);

unlink($file);


?>
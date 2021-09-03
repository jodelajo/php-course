<?php 

$file = "example.txt";
chmod($file, 0664);

// open file
$handle = fopen($file, "w");

// close file
fclose($handle);

?>
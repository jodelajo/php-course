<?php 

$file = "example.txt";
chmod($file, 0664);

// open file
if ($handle = fopen($file, "r")){
// $content = fread($handle, 10); //Each bite equals a character
$content = fread($handle, filesize($file)); //whole file

    echo $content;
    fclose($handle);
} else {
    echo "error";
}

// close file


?>
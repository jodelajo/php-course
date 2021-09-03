<?php 

$file = "example.txt";
chmod($file, 0664);

// open file
if ($handle = fopen($file, "w")){
fwrite($handle, 'i love php');


    fclose($handle);
} else {
    echo "error";
}

// close file


?>
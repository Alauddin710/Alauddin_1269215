<?php 
$file = "mytextfile.txt";
$fh= fopen($file, "w"); // w sudo porte pare

fwrite($fh, "I want to write somethieng\n");
fwrite($fh, "I want to write somethieng\n");
fwrite($fh, "I want to write somethieng\n");

$file = file($file); // file array akare print kore
print_r($file);
fclose($fh);

?>

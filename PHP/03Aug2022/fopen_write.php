<?php 
$file = "mytextfile.txt";
$fh= fopen($file, "w"); // w sudo writte korte pare pare

fwrite($fh, "I want to write somethieng\n"); //je file daoa hoache sae file ka re-write kore felbe
fwrite($fh, "I want to write somethieng\n");
fwrite($fh, "I want to write somethieng\n");

$file = file($file); // file kono file accesser jonno babohar hoi. file array akare print kore
print_r($file);
fclose($fh);

?>

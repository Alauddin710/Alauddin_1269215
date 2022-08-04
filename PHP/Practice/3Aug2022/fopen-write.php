<?php 
$file= "text.txt";
$fh= fopen($file, "w"); //w means write  kora

fwrite($fh, "I Want to write something\n"); //je file daoa hoache sae file ka re-write kore felbe
fwrite($fh, "I Want to write something \n");
fwrite($fh, "I Want to write something \n");
fwrite($fh, " I love country \n");

$file= file($file);
echo  "<pre>";
print_r($file);

fclose($fh);
?>
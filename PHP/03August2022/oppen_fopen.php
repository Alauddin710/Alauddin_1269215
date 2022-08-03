<?php 
$file = "mytextfile.txt";
$fh= fopen($file, "r");

while (!feof($fh)){
    echo fgets($fh). "<br>";
}
fclose($fh);

?>
<hr>
<?php

$file = "mytextfile.txt";
$fh= file($file);
print_r($fh);
?>
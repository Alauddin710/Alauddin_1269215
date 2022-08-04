<?php 
$file = "mytextfile.txt";

$fh= fopen($file, "r"); // fopen dara file open hobe porar jonno

// print_r($fh);
// echo fgets($fh); // fgets dara akline ak line kore paoa jabe ba pora jabe.

while(!feof($fh)){
    echo fgets($fh). "<br>";
}
fclose($fh); // fclose dara file pora sesh hobe ba file close hobe
?>
<hr>
<?php 
$file = "mytextfile.txt";
$fh= file($file); // akane file ta $file array akare deakbe jeta print_r function dara dekano hoiece
print_r($fh);
?>
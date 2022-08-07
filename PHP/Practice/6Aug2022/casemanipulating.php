<?php 
$str= "Hello world, How are you with giving extra amount in oil";
$lower= strtolower($str);
echo "all word is : $lower <br>";
$ucfirst= ucfirst($str);
echo " First letter in uppercase $ucfirst <br>";
$lcfirst= lcfirst($ucfirst);
echo "First letter is lower case : $lcfirst <br>";
$ucwords= ucwords($lower);
echo "All word first letter is: $ucwords <br>";

$uppers= strtoupper($str);
echo " All word is uppers case : $uppers";
?>
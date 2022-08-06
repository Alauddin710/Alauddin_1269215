<?php 
$str= "Hello world, How are you with giving extra amount in oil";
$lower= strtolower($str);
echo "all in lowercase: $lower <br>";

$ucfirst= ucfirst($lower);
echo "First letter in uppercase : $ucfirst";
$ucwords= ucwords($lower);
echo "First letter in uppercase : $ucwords";

$uppers= strtoupper($ucwords);
echo $uppers;
?>
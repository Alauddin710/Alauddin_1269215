<?php 
$amount = 500.00;
//echo str_pad($amount, 20, "0", STR_PAD_LEFT); // just left
$output = str_pad($amount, 20, "0", STR_PAD_LEFT);
echo $output;
echo "<br>";
$string = "Bangladesh";
echo str_pad($string,20,"#=", STR_PAD_BOTH);


?>
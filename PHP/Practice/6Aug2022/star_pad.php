<?php 
$amount = 500.00;
echo str_pad($amount,20, "0", STR_PAD_LEFT);
echo "<br>";
$ouput= str_pad($amount,10,"0",STR_PAD_RIGHT);
echo "<br>";
echo $ouput;
$str= "Bangladesh";
echo str_pad($str, 20, "#=",STR_PAD_BOTH);
?>
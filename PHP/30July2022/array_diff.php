<?php

$array1 = array("OH", "CA", "NY", "HI", "CT", "BD");
$array2 = array("OH", "CA", "HI", "NY", "IA", "BD");
$array3 = array("TX", "MD", "NE", "OH", "HI", "CTG");
$diff = array_diff($array1, $array2, $array3); // akane 1st array modde jodi kono lika baki array modde thake tha hole seta print korbe na mane common thakle. common bade jeta thakbe seta print korbe;
print_r($diff);
 ?>
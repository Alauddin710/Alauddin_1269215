<?php 
$division = array ("Dhaka"=>"Buriganga", "Sylhet"=>"Surma", "Khulna"=>"Rupsa");

$numbers = range(50,100);

echo array_search("Surma",$division); // array search Value aonsare search kore
echo "<pre>";
echo array_search(60,$numbers);
?>
<?php 
$division = array ("Dhaka"=>"Buriganga", "Sylhet"=>"Surma", "Khulna"=>"Rupsa");
$numers = range(50,100);
echo array_search("Surma", $division);

echo "<br>";

echo array_search(60, $numers);
?>
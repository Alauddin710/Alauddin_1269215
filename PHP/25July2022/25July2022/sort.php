<?php 
$cities = ["Dhaka","Khulna","Rangpur","Bogura"];
echo "<pre>";
print_r($cities);
sort($cities);
print_r($cities);

$numbers= [5,15,28,100,7,4,357];
sort($numbers);
print_r($numbers);

$division = array ("Dhaka"=>"Buriganga", "Sylhet"=>"Surma", "Khulna"=>"Rupsa");
sort($division);
print_r($division);

?>
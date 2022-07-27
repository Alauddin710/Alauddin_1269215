<?php 
$division = array ("Dhaka"=>"Buriganga", "Sylhet"=>"Surma", "Khulna"=>"Rupsa");

$allkeys= array_keys($division); // index koje index dekabe
echo "<pre>";
print_r($allkeys);
?>
<?php 
$division = array ("Dhaka"=>"Buriganga", "Sylhet"=>"Surma", "Khulna"=>"Rupsa");

$allvalues= array_values($division); // value kojle index dekabe

print_r($allvalues);
?>
<?php 
$division = array("Dhaka"=>"Burigana","Sylhet"=>"Surma","Khulan" => "Rupsa");

echo array_key_exists("Dhaka", $division);
echo array_key_exists(" ", $division);
?>
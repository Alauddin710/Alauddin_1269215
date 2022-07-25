<?php 
$division = array ("Dhaka"=>"Buriganga", "Sylhet"=>"Surma", "Khulna"=>"Rupsa");

echo array_key_exists("Dhaka", $division);
// array_key_exists holo "Dhaka" array key/array index ki na check kore; array ki/array index hole true/1, false/0 answer dibe
echo array_key_exists("Padma", $division);// akane "Padma check kore pabe na tai fals dekabe mane 0 output asbe ba faka dekabe"
?>
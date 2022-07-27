<?php 
$cities= ["Dhaka","Khulna","Khulna","Dhaka","Rangpur","Bogura"];
$setFrequency= array_count_values($cities); // akta array koita man ase seta gonona kore
echo "<pre>";
//print_r(array_count_values($cities)); //aivabe print deoa jai
print_r($setFrequency);
echo "<br>";
?>
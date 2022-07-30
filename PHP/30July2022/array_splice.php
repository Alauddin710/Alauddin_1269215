<?php 

$districts = array("Dhaka","Comilla","Noakhali","Barisal", "Khulna", "Pabna","Narsin");

$subset = array_splice($districts, 3, 2, array("Narail","jessor"));

echo "<pre>";
print_r($subset);
print_r($districts);



?>
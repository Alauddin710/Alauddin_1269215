<?php

$districts = array("Dhaka", "Comilla", "Noakhali", "Barisal", "Khulna", "Pabna", "Narsingdi");

$subset = array_splice($districts, 3, 2, array("Narail", "Jessore","Mymonsing")); // array splice jog korse oporer array sate jekhan theke bad gese. abong nicer array golo opadan gulo
echo "<pre>";
print_r($subset);
print_r($districts);

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Connecticut");
$subset = array_splice($states, 2, 2, array("New York", "Florida"));
print_r($states);

// $districts = array("Dhaka", "Comilla", "Noakhali", "Barisal", "Khulna", "Pabna", "Narsingdi");
// $subset = array_splice($districts, 3 ,2, array("Narail","Jessor"));
// echo "<pre>";
// print_r($subset);
// print_r($districts);
?> 
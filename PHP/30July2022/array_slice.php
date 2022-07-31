<?php 

$districts = array("Dhaka","Comilla","Noakhali","Barisal", "Khulna", "Pabna","Narsin");
//$subset = array_slice($districts, 2);
// $subset = array_slice($districts, -2);
// echo "<pre>";
// print_r($subset);


$subset = array_slice($districts, -3);// total length (7) -3
echo "<pre>";
print_r($subset);

$subset = array_slice($districts, 2, 2);
echo "<pre>";
print_r($subset);


?>



<?php 
//  $districts = array("Dhaka", "Comilla", "Noakhali", "Barisal", "Khulna", "Pabna", "Narsingdi");
// $subset = array_slice($districts,3); // akane 0,1,2,3 porjonto gune jekan theke guna sesh sekan theke kete baki gulo print korbe 
// echo "<pre>";
// print_r($subset);

// //- dea kora
// $subset = array_slice($districts,-3); // total length (7) - 3 = 4 thakebe, tokon index 0,1,2,3,4 porjonto  gune jekane sesh sekan theke 3ta print korbe;
// echo "<pre>";
// print_r($subset);


// // kon gula nibe seta bole deoa
// $subset = array_slice($districts, 3, 2); // (akane length bole deoa hoice mane koita print korbe) akane 0,1,2,3 porjonto gune jekan theke guna sesh sekan theke kete 2 print korbe;
// echo "<pre>";
// print_r($subset);

?>
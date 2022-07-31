<?php 
$coutries = array(
    "Bangladesh" => "Dhaka", 
    "Srilanka" => "Colombo", 
    "Austriali" => "Cydny", 
    "Nepal" => "Khathmondu", 
   );

   $randomed= array_rand($coutries, 2); // array random, randome anusare dekabe akene 2 mane proti bar 2ta kore random korbe
   print_r($randomed);
?>
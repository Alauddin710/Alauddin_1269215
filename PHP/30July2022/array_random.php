<?php 
$coutries = array(
    "Bangladesh" => "Dhaka", 
    "Srilanka" => "Colombo", 
    "Austriali" => "Cydny", 
    "Nepal" => "Khathmondu", 
   );

   $randomed= array_rand($coutries, 2);
   print_r($randomed);
?>
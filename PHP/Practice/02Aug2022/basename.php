<?php 
$path= "D:\xampp\htdocs\Alauddin_1269215\PHP\Practice\02Aug2022\myfile.txt";

$output = basename($path, ".txt");
echo $output; // without extention
echo "<br>";
$output = basename($path);
echo $output; //with extention
echo "<br>";
?>



Base name dara jana jai filer base name/path ta. akane akta file location kothai ase seta copy koren nea asa hoice deakar jonno
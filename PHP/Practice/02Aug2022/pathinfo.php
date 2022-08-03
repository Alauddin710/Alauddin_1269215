<?php 
$path= "D:\xampp\htdocs\Alauddin_1269215\PHP\Practice\02Aug2022/myfile.txt";
$output = pathinfo($path); //will return name array
echo "<pre>";
print_r($output);

echo $output['dirname']; //drive name / directory name
echo "<br>";
echo $output['basename']; // base name dara amra jante pari
echo "<br>";
echo $output ['filename']; // file name dara jante pari file ki name ase
echo "<br>";
echo $output['extension']; // extension dara jante pari file extension ki
?>
<?php 
$path="E:\xampp\htdocs\Alauddin_1269215\PHP\02Aguast2022/myfile.txt";
$output= pathinfo($path); // will return nam array
echo "<pre>";
print_r($output); // full dirctory path

echo $output['dirname'];
echo "<br>";
echo $output['basename'];
echo "<br>";
echo$output['filename'];
echo "<br>";
echo $output['extention'];

?>
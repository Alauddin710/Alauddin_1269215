<?php 
$numbers =range(1,10);
echo "<pre>";
print_r($numbers);
$numbers =range(0,10,2);// Even Numbers
print_r($numbers);
$numbers =range(1,10,2);// odd Numbers
print_r($numbers);

$letters = range("A", "Z");
print_r($letters);
$letters = range("a", "z");
print_r($letters);
$letters = range("a", "z",2);
print_r($letters);
?>
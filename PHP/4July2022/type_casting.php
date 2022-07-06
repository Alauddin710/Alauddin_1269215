<?php 
// $x= 100;
// $converted=(string) $x;
// var_dump($x);
// echo "<br>";

// var_dump($converted);
// echo "<br>";

// $price=50.60;
// $converted=(int) $price;
// var_dump($price);
// echo "<br>";
// var_dump($converted);
// echo "<br>";
// $mon="mon kmon kmon kore";
// $converted=(int) $mon;
// var_dump($mon);
// echo "<br>";
// var_dump($converted);

?>

<?php 
// Array Conversion
$miles= 125;
$casted=(array) $miles;
// var_dump($casted);
echo $casted[0];

?>

<?php 
// Object Conversion
$car="Toyota";
$converted =(object)$car;
var_dump($converted);
echo $converted->scalar;
?>
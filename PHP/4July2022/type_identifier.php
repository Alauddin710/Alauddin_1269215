
<?php 
$number =100;

$string = "Hello World";
echo "<br>";
echo gettype($number);
echo "<br>";
echo gettype($string);
echo "<br>";
echo is_int($string);
echo "<br>";
echo "Integer:".is_int($number);
echo "<br>";
$yes = false;
echo "Boolen:".is_bool($yes);
echo "<br>";
$number =[10,15,20];
echo "Scalar:". is_scalar($string);
?>
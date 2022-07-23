<?php 
$num= 100;
$string="Hello World";
echo "<br>";
echo gettype($num);
echo "<br>";
echo gettype($string);
echo "<br>";
echo is_int($string);
echo "<br>";
echo is_int($num);
echo "<br>";
echo "Integer:". is_int($num);
echo "<br>";
$yes=false;
echo "Boolen:".is_bool($yes);
echo "<br>";
$number=[15,15,17,18];
echo "scalar:". is_scalar($string);
?>
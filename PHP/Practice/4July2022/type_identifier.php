<?php 
$number=100;
$string= "Hello World";
echo gettype($number);
echo "<br>";
echo gettype($string);
echo "<br>";
echo is_int($string);
echo "<br>";
echo "Integer".is_int($number);
echo "<br>";
$yes= false;
echo "Boolen:".is_bool($yes);
echo "<br>";
$yes= true;
echo "Boolen:".is_bool($yes);
echo "<br>";
$number=[15,16,17];
echo "Scalar:". is_scalar($number);// শুধু মাত্র সিংগেল সংখ্যা প্রকাশ করে স্কেলার
echo "<br>";
$number=15;
echo "Scalar:". is_scalar($number);// শুধু মাত্র সিংগেল সংখ্যা প্রকাশ করে স্কেলার
?>

<?php 
$fame= array(
    "Bogura"=>"Cart",
    "Cumilla"=>"Malai",
    "Sylhet"=>"Tea",
    "Dhaka"=>"Bakorkhani",
    "Rajshai"=>"Mango",

);
// echo key($fame) ."<br>";
// next($fame);
// echo key($fame);
while($value= current($fame)){
    echo $value ."<br>";
   next($fame);
}
?>
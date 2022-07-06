<?php 
$valu1 ="Hello";
$valu2 = &$valu1;
$valu2= "World";
echo $valu1;//Hello
echo "<br>";
echo $valu2; //World
?>
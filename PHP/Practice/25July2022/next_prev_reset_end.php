<?php 
$spots= array("lalon","Padma","Harding","Jamuna");
current($spots);
next($spots);
next($spots);
echo current($spots). "<br>";
prev($spots);

echo current($spots) . "<br>";
reset($spots);
echo current($spots) . "<br>";

?>
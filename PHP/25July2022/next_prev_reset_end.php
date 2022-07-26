<?php 
$spots= array(" Ahsan Manjil","Lalbagh Fort","Snargoan", "Buriganga");
current($spots); echo "<br>";
//echo next($spots);
next($spots);
echo current($spots); echo "<br>";
prev($spots);
echo current($spots); echo "<br>";
end($spots);
echo current($spots); echo "<br>";
reset($spots);
echo current($spots); echo "<br>";
?>
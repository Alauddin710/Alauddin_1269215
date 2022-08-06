<?php 
$rivers = array( "Padma", "Jamuna","Korotoa","Karnafuly","Buriganga");
//$allrivers = implode("| ", $rivers);
$allrivers = implode(" -|- ", $rivers);
$allrivers = implode(", ", $rivers);
echo $allrivers;

?>
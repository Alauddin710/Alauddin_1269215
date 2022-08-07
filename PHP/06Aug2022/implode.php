<?php 
$rivers = array( "Padma", "Jamuna","Korotoa","Karnafuly","Buriganga");
//$allrivers = implode("| ", $rivers);
$allrivers = implode(" -|- ", $rivers);
$allrivers = implode(", ", $rivers); // implode array k string kore
echo $allrivers;

?>
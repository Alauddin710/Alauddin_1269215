<?php 
$email =  "admin@gmail.com";
$string =strstr($email, "@");
//echo ltrim($string, "@");
echo trim($string, "@");
?>
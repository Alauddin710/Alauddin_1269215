<?php 
//echo "<pre>";
//$_REQUEST= $_POST OR $_GET
print_r($_REQUEST);

$email= $_REQUEST['email'];
$pass= $_REQUEST['pswd'];
echo " You wanted to login with yuor email {$email} and passeord {$pass}";
echo "<pre>";
print_r($GLOBALS);
?>
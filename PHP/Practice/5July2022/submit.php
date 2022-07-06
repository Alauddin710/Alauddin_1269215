<?php 

print_r($_REQUEST);
$email= $_REQUEST['email'];
$password = $_REQUEST['pass'];
echo "You wanted to login {$email} and {$password}";
echo "<pre>";
print_r($GLOBALS);
?>
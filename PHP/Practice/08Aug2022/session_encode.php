<?php 
session_start();
// Set a few session variables.
$_SESSION['user'] = "Toky";
$_SESSION['login'] = date("m-d-y h:i:s");
print_r($_SESSION);
// Encode all session data into a single string and return the result
$vars = session_encode(); // session encode dara bujjasse all session details;
echo $vars;
session_decode($vars);
//session_unset();

?>
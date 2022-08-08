<?php
 // Initiate session and create a few session variables
 session_start();
 // Set a few session variables.
//  $_SESSION['username'] = "Tokey";
//  $_SESSION['login'] = date("M d Y H:i:s");
//  $_SESSION['age'] = 25;
 // Encode all session data into a single string and return the result

 //session_destroy();
 $Vars = session_encode();
 echo $Vars;
 print_r($_SESSION);
 session_unset()
?>
<hr>

<?php
 // Initiate session and create a few session variables
 session_start();
 // Set a few session variables.
//  $_SESSION['username'] = "Tokey";
//  $_SESSION['login'] = date("M d Y H:i:s");
//  $_SESSION['age'] = 25;
 // Encode all session data into a single string and return the result

 //session_destroy();
 $Vars = session_encode();
 echo $Vars;
 print_r($_SESSION);
 session_unset()
?>



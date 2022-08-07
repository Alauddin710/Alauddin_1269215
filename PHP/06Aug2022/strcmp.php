<?php 
// $str1 = "Abcd123456678"; // ;
// $str2 = "abcd123456678";
// echo strcmp ($str1, $str2);
?>


<?php
 $pswd = "supersecret";
 $pswd2 = "supersecret2";
 if (strcmp($pswd, $pswd2) != 0) { // akane !=0 mane holo false
 echo "Passwords do not match!";
 } else {
 echo "Passwords match!";
 }
?>
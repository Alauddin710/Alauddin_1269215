<?php 
// $str1 = "Abcd123456678"; // ata boro hole -1 hobe; akoi hole 0 hobe;
// $str2 = "abcd123456678";
// echo strcmp ($str1, $str2);
?>


<?php
 $pswd = "supersecret";
 $pswd2 = "supersecret2";
 if (strcmp($pswd, $pswd2) != 0) {
 echo "Passwords do not match!";
 } else {
 echo "Passwords match!";
 }
?>
<?php 
echo time(); // ata dara amra current time pai
$time= time();
$result = getdate(1659923334); //ata dara amra array akare pai mash, bosor, din, etc;
echo "<pre>";
//print_r($result);
echo "Today's date is: " .$result ['mday'] . " Month is: " . $result['month'];
echo "<br>";
echo date("Y-m-d", time());
echo "<br>";
echo date("d/m/y h:i:s , 1659923334");// ata dara current time bujabe
?>
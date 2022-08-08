<?php 
echo time();
$time= time();
$result= getdate(1659865384); //ata dara amra array akare pai mash, bosor, din, etc;
echo "<pre>";
//print_r($result);

echo "Today's date is ". $result['mday']. "Month is: ". $result['month'];

echo date("Y-m-d", time());

echo "<br>";
echo date("Y-m-d h:i:s", 1659865384);// current time

// maser 7tm din
?>
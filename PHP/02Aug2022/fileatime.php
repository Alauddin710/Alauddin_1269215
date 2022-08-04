<?php 
//ini_set("date.timezone", "Europe/Berlin" );
ini_set("date.timezone", "Asia/Dhaka"); // ini_set dara jana jai kon desher time hobe seta ini_set na dile dekebe uroper kono country time. ini_set ta je deser progamer banise sei time set kore dao thakbe.
$file = "myfile.txt";
$time = fileatime($file);
echo "<br>";
echo $time;
echo "<br>";
echo date("h:i:s", $time);
?>
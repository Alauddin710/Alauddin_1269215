<?php 


ini_set("date.timezone", "Asia/Dhaka"); // ini_set dara jana jai kon desher time hobe seta ini_set na dile dekebe uroper kono country time. ini_set ta je deser progamer banise sei time set kore dao thakbe.
$file = "mytextfile.txt";
$ctime = filectime($file);

$atime = fileatime($file);
$mtime = filemtime($file);



echo "<br>";
echo " File Creation Time:". date("h:i:s",$ctime) . "<br>";
echo " File Access Time:". date("h:i:s",$atime) . "<br>";
echo " File Modification Time:". date("h:i:s",$mtime) . "<br>";
?>
<?php 
ini_set("date.timezone", "Asia/Dhaka");
$file= "mytextfile.txt";
$filectime= filectime($file); // filectime dara bujai file khokhon tori kora hoice
$fileatime= fileatime($file);// fileatime dara bujai file khokhon probesh kora hoice
$filemtime= filemtime($file); // filemtime dara bujai file khokhon modification                  kora hoice
echo " File Creation Time: ". date("h:i:s", $filectime). "<br>";
echo  "File access Time: " . date ("h:i:s", $fileatime). "<br>";
echo "File modification Time:" .date ("h:i:s",$filemtime). "<br>"
?>
<?php 
$directory= "C:";

$bytes= disk_free_space($directory);
echo $bytes;
echo "<br>";
$totalbytes= disk_total_space($directory);
echo " Free Space " . round($bytes/1024/1024/1024, 2);
echo " <br>";
echo "Total Space ". round($totalbytes/1024/1024/1024,2);
?>
<?php 
echo "<pre>";
getmxrr("prothomalo.com", $mxhosts);
echo "<br>";

getmxrr("The daily star.com", $mxhosts);
print_r($mxhosts)
?>
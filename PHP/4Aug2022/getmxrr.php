<?php 
echo "<pre>";
getmxrr("prothomalo.com", $mxhosts); // er maddome jana jai bibinno compani ki hosts babor korse
getmxrr("prothomalo.com", $mxhosts);
getmxrr("prothomalo.com", $mxhosts);
echo "<br>";

getmxrr("The daily star.com", $mxhosts);
print_r($mxhosts);
?>
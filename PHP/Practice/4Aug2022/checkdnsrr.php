<?php
$domain= "prothomalo.com";
$recordexists= checkdnsrr($domain, "ANY");
print_r($recordexists);
echo "<br>";
if($recordexists){
echo " The domanin '$domain' has dnsrr recordss";
} else{
    echo " The domain '$domai' not found";
}
?>
<?php
 $domain = "example.com";
 $recordexists = checkdnsrr($domain, "ANY"); //checkdnsrr true of false ans dai
 //$recordexists = checkdnsrr($domain, "MX");
print_r( $recordexists);

 if ($recordexists) {
 echo "The domain '$domain' has a DNS record!";
}
 else{
 echo "The domain '$domain' does not appear to have a DNS record!";
}
 ?>
<?php 

$result= dns_get_record("example.com");
echo "<br>";
$result1= dns_get_record("prothomalo.com");
echo "<pre>";
print_r($result);
print_r($result1);
?>
<?php
$code= array("DH", "CU","BA","FO","Jessor");
$districts= array("Dhaka","Cumilla","Barisal","Foridpur","Jessor");

$combine= array_combine($code, $districts);
echo "<pre>";
print_r($combine);
?>
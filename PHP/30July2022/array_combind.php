<?php 
$code= array ("DH","CO","NO","BA");
$districts = array("Dhaka","Comilla","Noakhali","Barisal");
$combine= array_combine($code, $districts);
echo "<pre>";
print_r($combine);
?>


<?php 
$email = "jason@gmail.com, abc@gmail.com";
$replace= str_replace("@","at",$email);
echo "Contact the author of this article at $replace";
?>
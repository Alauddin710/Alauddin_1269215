<?php 
$responseString='Dear'.$_POST['fullName'].',Your Contact information hass been saved.';
$responseString.='Your Enterd Follwing information';
$responseString.='<br>';
$responseString.='<strong>E-mail:</strong>'.$_POST['email'];
$responseString.='<br>';
$responseString.='<strong>E-mail:</strong>'.$_POST['sex'];
$responseString.='<br>';
$responseString.='<strong>E-mail:</strong>'.$_POST['country'];
echo $responseString;
?>
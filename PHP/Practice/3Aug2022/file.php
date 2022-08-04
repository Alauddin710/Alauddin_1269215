<?php 
//aeta only read korte pare ..write korte pare na
$file= "address.txt";
$datas = file($file);// file bultin function ta kono file k access kore
// echo "<pre>";
// print_r($datas);
foreach($datas as $data){
  list($name, $email) = explode(" ", $data);
  echo "<a href=\"$email\">$name</a> <br>";
}
?>
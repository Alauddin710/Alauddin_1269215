<?php 
$string= "Admin@gmail.com";
$string = strstr($string,"@"); //default thake right 
echo ltrim($string,"@")."<br>";// একটি স্ট্রিং এর ডান দিক থেকে হোয়াইটস্পেস বা অন্যান্য পূর্বনির্ধারিত অক্ষর সরিয়ে দেয়
echo trim($string,"@"); //একটি স্ট্রিং এর উভয় দিক থেকে হোয়াইটস্পেস বা অন্যান্য পূর্বনির্ধারিত অক্ষর সরিয়ে দেয়
?>
<hr>
<?php

 $email = "sales@example.com";
 echo ltrim(strstr($email, "@"),"@");// ltrim er madhome @theke ager part bad dea sob part neache and prothom e jeta pabe setatae kaj korbe ..porer ta ar kaj korbe na

?>
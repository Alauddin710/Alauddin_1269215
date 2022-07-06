<?php 
//ini_set('display_errors',0); ডিসপ্লে কোন নোটিশ দেখাবে সেই জন্য এটা ব্যবহার করা হয়েছে।
//$string = "50 is the price of mango"; স্ট্রিং এর প্রথমে যদি সংখ্যা থাকে তাহলে গুন ভাগ ও যোগ করতে পারবে কিন্তু শেষে থাকলে পারবে না। এটা হলো জাগলিংরে নিয়ম 
$string = "the price of mango 50";
$qty = 100;
$total = $string * $qty;
echo $total;
?>
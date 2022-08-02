<?php 
$_POST['submit'];
$id= $_POST['id'];
$name= $_POST['name'];
$desgi=$_POST['designation'];
$basic= $_POST['basic'];
$rent= $_POST['rent'];
$trans= $_POST['trans'];

echo " ID: $id <br>";
echo " Name: $name <br>";
echo "Total amount: " . ($basic+$rent+$trans);


?>
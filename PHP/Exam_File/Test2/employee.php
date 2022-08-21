<?php 
$_POST['submit'];
$id = $_POST['id'];
$name = $_POST['name'];
$desig = $_POST['designation'];
$basic = $_POST['basic'];
$rent = $_POST['rent'];
$trans = $_POST['trans'];

echo "ID: $id<br>";
echo "Name: $name<br>";
echo "Designation: $desig<br>";
echo "Total amount:". ($basic+$rent+$trans) . "<br>";
?>
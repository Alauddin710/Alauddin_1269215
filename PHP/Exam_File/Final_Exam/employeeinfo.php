<?php 
if(isset($_POST['submit'])){

$id = $_POST['id'];
$name = $_POST['name'];
$desig = $_POST['designation'];
$basic = $_POST['basic'];
$rent = $_POST['rent'];
$trans = $_POST['trans'];

echo " ID : $id <br>";
echo " Name : $name <br>";
echo " Name : $desig <br>";
echo " Total amoutn:". ($basic+$rent+$trans);
}
?>
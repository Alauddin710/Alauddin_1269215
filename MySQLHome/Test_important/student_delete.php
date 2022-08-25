<?php 
// echo $_GET['id'];

$db= new mysqli('localhost','root','','alauddin1269215');
$id= $_GET['id'];
$sql= "SELECT FROM students WHERE student_id='$id'";
$db->query($sql);
if($db->affected_rows>0){
header("Location:students_list.php");
}
?>
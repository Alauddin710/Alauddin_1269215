<?php 
$db = new mysqli("localhost","root","","wdpf51");

$email =$_GET['email'];
$pass =  $_GET['pass'];
$pass= sha1($pass);
$sql = "SELECT * FROM users WHERE email='$email' AND password = '$pass'";
$result =$db->query($sql);
if($result->num_rows==1){
    echo "<span class='green'>Valid users</span>";
}else{
    echo "<span class='red'>Invalid User</span>";
}

// echo $_GET['email'];
// echo "<br>";
// echo $_GET['pass']
?>

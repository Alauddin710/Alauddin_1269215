<?php 
include_once('dbconfig.php');
// echo $email=$_POST['email'];
// echo $pass =$_POST['pass'];
 $email=$_POST['email'];
 $pass =$_POST['pass'];
echo "<br>";
$pass = sha1($pass);

//echo "SELECT * FROM users WHERE email='$email' AND password = '$pass'"; // only testing

$sql= "SELECT * FROM users WHERE email='$email' AND password = '$pass'";
$result= $db->query($sql);
 if($result->num_rows!=1){
    $msg= "Email or Password may be Wrong";

    header("Location:index.php?m=$msg");
 } else{
    session_start();
    $_SESSION['email']=$email;
    header("Location:dashboard.php");
 }
?>
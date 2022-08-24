<?php 
include_once('dbconfig.php');
 $email= $_POST['email'];
 $pass= $_POST['pass'];
echo "<br>";
$pass = sha1($pass);
//echo "SELECT * FROM users WHERE email='$email' AND password = '$pass'";
$sql="SELECT * FROM users WHERE email='$email' AND password = '$pass'";
$result= $db->query($sql);
if($result->num_rows!=1){
$msg= "Email or Password may be Wrong";

 header("Location:index.php?m=$msg");// ai m variable ta index.php te patano hoice if isseter modde
}else{
    session_start();
    $_SESSION['email']=$email;
    header('Location:dashboard.php');
}
?>
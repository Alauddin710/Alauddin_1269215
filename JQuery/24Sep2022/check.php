<?php 

include('dbconfig.php');

$email= $_GET['email'];
$pass= $_GET['pass'];
// $email= $_REQUEST['email'];
// $pass= $_REQUEST['pass'];
$pass = sha1($pass);
//query
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
$result = $db->query($sql);

if($result->num_rows==1){
    echo " <span class='green'>Valid User</span>";
}else{
    echo " <span class='red'>Invalid User</span>";
}

// echo $_GET['email'];
// echo "<br>";
// echo $_GET['pass']
?>

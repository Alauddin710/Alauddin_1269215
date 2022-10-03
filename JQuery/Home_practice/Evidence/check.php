<?php $db = new mysqli("localhost","root","","wdpf51");
$email = $_GET['email'];
$pass = $_GET['pass'];
$pass = sha1($pass);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
$result = $db->query($sql);
if($result->num_rows>0){
    echo "<span class='green'>Login Successful</span>";
}else{
    echo "<span class='red'>Invalid Email</span>";
}
?>

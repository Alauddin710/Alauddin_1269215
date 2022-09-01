<?php 
include_once('dbconfig.php');
 //echo $email = $_POST['email'];
 //echo $pass= $_POST['pass'];// ata dara deka jabe pass word ase kina //abong atar video dekta hobe 23aug
 $email = $_POST['email'];
 $pass= $_POST['pass'];// 
 $pass = sha1($pass);
//echo "SELECT * FROM users WHERE email='$email' AND password ='$pass'";// ata widows theke copy kore phpmyadmin page nie sqle paste korle jodi password and email thik thake thahole name chole asbe
$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
 $result = $db->query($sql);
 //echo $result->num_rows; // ata dara buja jai sob thik ase kina output jodit 1 ase tha hole true
    if($result->num_rows!=1){
        // echo "Email or password may be wrong";
        // include_once('index.php');// ai pagei msg ta dekabbe ai jonno testing jonno ata babohar kora hoice

        $msg=  "Email or password may be wrong";
        header("Location:index.php?m=$msg");
    }else{
        session_start();
        $_SESSION['email']=$email;
        header("Location:dashboard.php");
    }
?>
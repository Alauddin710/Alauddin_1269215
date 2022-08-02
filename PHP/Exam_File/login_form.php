<?php 
valiDate();



function valiDate(){
    $_POST['submit'];
    $login= $_POST['login'];
    $email = $_POST['email'];

    $validlogin=0; // for invalid login
    $validemail=0; // for invalid email

    if($login=="" && $email==""){
        echo " Please Enter your login name and Email first";
        return;
    }if($login==""){
        echo " Please Enter your login name";
    } elseif(strlen($login)>8 || strlen($login)<4){
        echo "Login name invalid <br>";
    }else{
        $validlogin=1; //set login name valid
    } if($email==""){
        echo " Please Enter your email name <br>";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email number is invalid <br>";
    } else{
        $validemail=1; // set valid email
    }  if($validlogin==1 && $validemail==1){
        echo "Login successful";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Enter your login name"> <br>
        <input type="text" name="email" placeholder="Enter your email number"> <br>
        <input type="submit" name="submit" value="CHECK"> <br>

    </form>
</body>
</html>
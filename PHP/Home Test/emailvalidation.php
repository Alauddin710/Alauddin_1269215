
<?php 

validform();

function validForm(){
    $_POST['submit'];
    $login =$_POST['login'];
    $email =$_POST['email'];
    $validlogin=0; //set login invalid;
    $validemail = 0;// set invalid email
    if($login=="" && $email==""){
      echo "Please Enter your login name and email number";
      return;
    }if($login==""){
        echo "Please Enter your login name";
    }elseif(strlen($login)>8 || strlen($login)<4){
        echo "Please Enter your login name must be 4 to 8 letters";
    } else{
        $validlogin=1;
    }if($email==""){
        echo "Please Enter your email number";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo " Emai is invalid";
    } else{
        $validemail=1;
    } if($validlogin==1 && $validemail==1){
        echo "login Successful";
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
    <h3>Login form</h3>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Please Enter your login name"> <br>
        <input type="text" name="email" placeholder="Enter your login nubmer"><br>
        <input type="submit" name="submit" value="SEND">
    </form>
</body>
</html>

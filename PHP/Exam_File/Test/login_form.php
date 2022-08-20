
<?php 
if(isset($_POST['submit'])){
    valiDate();
}

function valiDate(){
    $login= $_POST['login'];
    $email= $_POST['email'];
    
    $validlogin= 0;
    $validemail= 0;
    if($login=="" && $email==""){
        echo "Input your login name and email number";
        return;
    } if($login==""){
        echo "Input your login name";
    }elseif(strlen($login)>8 || strlen($login)<4){
        echo " login name must be 4 to 8 letters";
    }else{
        $validlogin = 1;
    }
    if($email==""){
        echo "Input Your Email name";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email is Invalid";
    }else{
        $validemail=1;
    }if($validlogin==1 && $validemail==1){
        echo " login Successfull";
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
    <h3>Login Form</h3>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Enter your login name"><br>
        <input type="text" name="email" placeholder="Enter your email name"><br>
        <input type="submit" name="submit" value="LOGIN"><br>
    </form>
</body>
</html>
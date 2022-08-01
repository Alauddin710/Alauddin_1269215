<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        loginform();
    }

   function loginform(){
    $login= $_POST['login'];
    $email= $_POST['email'];
    $validlogin=0; // for login invalid dekabe
    $validemail=0; // for email invalid dekabe

    if($login=="" && $email==""){
        echo "Your login name and email first input";
        return;
    }if($login==""){
        echo "Enter your login name";
    }elseif(strlen($login)>8 || strlen($login)<4){
        echo "Your login name invalid";
    } else{
        $validlogin=1; // set login name valid
    }if($email==""){
        echo "Enter your email number";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Your email is invalid";
    } else{
        $validemail=1; //set email valid
    }if($validlogin==1 && $validemail==1){
        echo " Login Successful";
    }
   }

    ?>

<h1>Login Form</h1>
<form action="" method="POST">
<input type="text" name="login" placeholder="Enter your login name"> <br>
<input type="text" name="email" placeholder="Enter your email number"> <br>
<input type="submit" name="submit" value="Check"> <br>
</form>
</body>
</html>
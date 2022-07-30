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

validForm();
}
        function validForm()
        {
        $login = $_POST['login'];
        $email = $_POST['email'];
        $validlogin = 0; // for login invalid
        $validemail = 0; // for email invalid
        if ($login == "" && $email == "") {
            echo " Enter your login name and email first";
            return;
        } if($login==""){
            echo " Enter your login name";
        }elseif(strlen($login)>8 || strlen($login)<4){
            echo "Enter login name must 4 to 8";
        } else{
            $validlogin=1;// set for valid login
        } if($email==""){
            echo " Enter your email name";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email invalid";
        } else {
            $validemail=1; // set email valid
        } //checking output
        if($validlogin==1 && $validemail==1){
            echo " login successful";
        }
    }
    
    ?>

    <form action="" method="POST">
        <input type="text" name="login" value="<?php if(isset($_POST['login'])) echo $_POST['login'];  ?>" placeholder="Enter your login name"> <br>
        <!-- valuer modde ata babohar kora hoice searh vare ja thakbe seta stir thakar jonno -->
        <input type="text" name="email"  value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" placeholder="Enter your eamil name"> <br>
        <input type="submit" name="submit" value="CHECK"> <br>

    </form>
</body>

</html>
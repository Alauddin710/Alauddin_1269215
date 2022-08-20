<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){



    extract($_POST);
    if($name=="" || $email =="" || $pass=="" || $repass==""){
        echo " Please fill up the form";
    } else{
        extract($_POST);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
            echo " <h3> $email valid </h3>";
        } else{
            echo " <h3> You have put an invalid Email address valid </h3>";
        }
        // password validation 
        // $pattern = /[A-z0-9,_%+-]{4,8}/;
        if(strlen($pass)>=4 && strlen($pass)<=8){
            echo " <h3> Password valid </h3>";
        }else{
            echo " <h3> You have put minimum 4 and maximum 8 character long password </h3>";
        }
        //password retype matching
        if($pass!= $repass){
            echo "Password are not same";
        }
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
    <h3>Registration Form</h3>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Entr your nmae"> <br>
        <input type="text" name="email" placeholder="Entr your email"> <br>
        <input type="text" name="pass" placeholder="Entr your pass"> <br>
        <input type="text" name="repass" placeholder="Entr your repass"> <br>
        <input type="submit" name="submit" value="Registration"> <br>
    </form>
</body>
</html>
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
    if ($_SERVER['REQUEST_METHOD'] =='POST') {
        $login=$_POST['login'];
        $email=$_POST['email'];

        $errors = array();
        if ($login=="") {
            $errors[]="Login must be filld up";
        }
        if ($email=="") {
            $errors[]="Email must be filld up";
        }
        if (strlen($login)>8 || strlen($login<4)) {
            $errors[] = "Login must be 4 to 8";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $errors[]="Valid email must";
        }
        // echo "<pre>";
        // print_r($errors);
        if(count($errors)>0){
            echo "";
            foreach($errors as $err){
                echo "$err <br>";
            }
        } else{
            echo "Login Successful";
        }
    }

    ?>


    <h2> Login Form</h2>
    <form action="" method="POST">
        <input type="text" name="login" value="<?php if(isset($login)) echo $login; ?>" placeholder="Enter your login name"> <br>
        <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>" placeholder="Enter your email"> <br>
        <input type="submit" name="submit" value="LOGIN">
    </form>


</body>

</html>
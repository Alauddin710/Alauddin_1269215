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
// echo "<pre>";
//$_REQUEST= $_POST OR $_GET
// print_r($_POST);

// $email= $_POST['email'];
// $pass= $_POST['pswd'];
// echo " You wanted to login with yuor email {$email} and passeord {$pass}";
?>
    <!-- <h1>Login form</h1>
    <form action="" method="POST">
    <input type="email" name="email" placeholder="Enter your email"> <br>
    <input type="password" name="pswd" placeholder="Enter Password"> <br>
    <input type="submit" name="login" value="Login"> -->

    <?php 
// echo "<pre>";
//$_REQUEST= $_POST OR $_GET
// print_r($_POST);

$email= $_REQUEST['email'];
$pass= $_REQUEST['pswd'];
echo " You wanted to login with yuor email {$email} and passeord {$pass}";
?>
    <h1>Login form</h1>
    <form action="" method="GET">
    <input type="email" name="email" placeholder="Enter your email"> <br>
    <input type="password" name="pswd" placeholder="Enter Password"> <br>
    <input type="submit" name="login" value="Login">

    
    

    </form>
</body>
</html>
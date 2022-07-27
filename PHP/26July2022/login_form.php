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
    
        echo $_POST['login'];
        echo $_POST['email'];
    //echo strlen($login);
    if(strlen($login)>8 || strlen($login<4)){
        echo "Invalid name ";
    }else{
        echo " Valid login name";
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo " Valid email Address";
    } else{
        echo "Invalid email Address";
    }
    
    ?>


    <h2> Login Form</h2>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Enter your login name"> <br>
        <input type="text" name="email" placeholder="Enter your email"> <br>
        <input type="submit" name="submit" value="LOGIN">
    </form>


</body>
</html>
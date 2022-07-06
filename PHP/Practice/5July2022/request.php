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
// এখানে $_REQUEST এর মাধ্যমে গেট এবং পোস্ট দুই টাকে রিসিভি করা যায়
    echo "<pre>";
    print_r($_REQUEST);
    $email= $_REQUEST['email'];
    $password= $_REQUEST['pass'];
     echo "You wanted to login email {$email} and password {$password}";
    ?>

    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter your email"> <br>
        <input type="password" name="pass" placeholder="Enter your password"> <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
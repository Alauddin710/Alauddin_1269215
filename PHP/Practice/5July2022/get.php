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
echo "<pre>";
print_r($_GET);
$email= $_GET['email'];
$password = $_GET['pass'];
echo "You wanted to login with your email {$email} and {$password}";
//এখানে গেট মেথড টা সিকিউর না।
?>

<form action="" method="get">
    <input type="email" name="email" placeholder="Enter your email"><br>
    <input type="password" name="pass" placeholder="Enter your password"><br>
    <input type="submit" name="login" value="Login">
</form>
</body>
</html>
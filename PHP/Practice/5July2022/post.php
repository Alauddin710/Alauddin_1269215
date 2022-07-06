<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post_Get_Request</title>
</head>
<body>
    
<?php 
echo "<pre>";
print_r($_POST);
$email= $_POST['email'];
$password= $_POST['pass'];
echo "You wanted longin with email {$email} and Password {$password}";

?>
<h1> Login Form</h1>
<form action="" method="POST">
    <input type="email" name="email" placeholder="Enter your email"> <br>
    <input type="password" name="pass" placeholder="Eneter your password"><br>
    <input type="submit" name="login" value="Login">
</form>

</body>
</html>
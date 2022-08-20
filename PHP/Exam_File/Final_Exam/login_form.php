
<?php 

validlogin();
function validlogin(){
$_POST['submit'];
$login=$_POST['login'];
$email=$_POST['email'];

$validlogin=0; // for invalid logn
$validemail=0; // for invalid email

if($login=="" && $email==""){
echo "Please Enter your login name and email number";
return;
}if($login==""){
    echo "Please Enter your login nam";
}elseif(strlen($login)>8 || strlen($login)<4){
echo "Login name must be 4 to 8 letters";
}else{
    $validlogin=1;
}if($email==""){
    echo "Please Enter your email name";
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email is invalid";
}else{
    $validemail=1;
}if($validlogin==1 && $validemail==1){
    echo "<h2>Login Successfull</h2>";
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
    <form action="" method="post">
        <input type="text" name="login" placeholder="Enter your login Name"> <br>
        <input type="text" name="email" placeholder="Enter your email number"> <br>
        <input type="submit" name="submit" value="Login" >
    </form>
</body>
</html>
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
if(isset($_POST['R'])){

// echo $_POST['login']. "<br>";
// echo $_POST['email'];

$name=$_POST['login'];
$email=$_POST['email'];

if(strlen($name)>8 || strlen($name)<4){
    echo "Invalid email Name <br>";
}else{
    echo "Valid email Name <br>";
}

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Valid email Address";
}else{
    echo "Invalid email Address";
}
}

?>

    <form action="" method="POST">
        <input type="text" name="login" placeholder="Enter your login name"> <br>
        <input type="text" name="email" placeholder="Enter your login name"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
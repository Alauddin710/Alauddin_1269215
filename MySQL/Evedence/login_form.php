<?php $db= new mysqli("localhost","root","","wdpf51_exam"); ?>

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
        $email= $_POST['email'];
        $pass= $_POST['pass'];
       $sql = "SELECT * FROM users WHERE email='$email' AND password ='$pass'";
       $result = $db->query($sql);
       if($result->num_rows>0){
        echo " You are register Succesfull";
       }else{
        echo "You are not register";
       }
       
    }
    ?>
    <h1>Login Form</h1>
    <form action="" method="POST">
        <label>Email:</label> <input type="text" name="email" placeholder="Enter your email number"><br>
        <label>Password:</label> <input type="password" name="pass" placeholder="Enter your Password"><br>
        <input type="submit" name="submit" value="login">
        
    </form>
</body>
</html>

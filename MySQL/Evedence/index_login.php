<?php $db = new mysqli("localhost","root","","wdpf51");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="POST">
       <label>Email</label> <input type="email" name="email" placeholder="Enter your email number"><br>
       <label>Password</label> <input type="password" name="pass" placeholder="Enter your email number"><br>
       <input type="submit" name="submit" value="Login">
    </form>

    <?php
    if(isset($_POST['submit'])){

        $email= $_POST['email'];
        $pass= $_POST['pass'];
       echo "<br>";
       $pass = sha1($pass);
       //echo "SELECT * FROM users WHERE email='$email' AND password = '$pass'";
       $sql="SELECT * FROM users WHERE email='$email' AND password = '$pass'";
       $result= $db->query($sql);
       if($result->num_rows>0){
       echo "You are register";
       } else{
        echo "You are not register";
       }
       $result->free();
       $db->close();
    }
  

    ?>
    
</body>
</html>
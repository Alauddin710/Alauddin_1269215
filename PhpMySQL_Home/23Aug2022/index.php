
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
    <form action="check_user.php" method="POST">
       <label>Email</label> <input type="email" name="email" placeholder="Enter your email number"><br>
       <label>Password</label> <input type="password" name="pass" placeholder="Enter your email number"><br>
       <input type="submit" name="submit" value="Login">
    </form>
    <?php
    if(isset($_GET['m'])){
        $msg=$_GET['m'];
        echo "<div class='alert alert-danger'>$msg</div>";
    }
   
    ?>
</body>
</html>
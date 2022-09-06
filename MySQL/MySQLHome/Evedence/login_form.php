<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Form</title>
    <style>
        h2{
            color: green;
        }
        h3{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Login From</h1>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $db= new mysqli('localhost','root','','exam2');
        $sql= "SELECT * FROM users WHERE name='$user' AND password='$pass'";
        $result = $db->query($sql);
        if($result->num_rows>0){
            echo "<h2>Valid user</h2>";
        }else{
            echo "<h3>Invalid userr</h3>";
        }
    }
    ?>
    <form action="" method="POST">
        Name:<input type="text" name="user" placeholder="Entr your User name"><br>
        Password:<input type="password" name="pass" placeholder="Entr your passwored"><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    
    <h2>User Login</h2>
    <?php
    if(isset($_POST['submit'])){
        //extract($_POST)
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $db= new mysqli('localhost','root','','wdpf51_exam2');
        $sql= "SELECT * FROM user WHERE email='$email' AND password ='$pass'";
        $result= $db->query($sql);

        //echo $result->num_rows; 
         //$result->num_rows==1; 
        // if($result->num_rows>0){
        //     echo "Your Valid user";
        // }else{
        //     echo "Your are invalid uesr";
        // }


        
        if($result->num_rows==1){
            echo "Your Valid user";
        }else{
            echo "Your are invalid uesr";
        }
    }
    ?>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Enter valid email"> <br>
        <input type="password" name="pass" placeholder="Enter your Password"><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>
<?php $db= new mysqli('localhost','root','','alauddin1269215'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Entry</title>
</head>
<body>
    <h1>Students Entry</h1>
    <form action="" method="POST">
    
    <label>ID</label> </label><input type="text" name="id" placeholder="Enter your id"> <br>
    <label>Name </label><input type="text" name="name" placeholder="Enter your name"> <br>
    <label>Email</label><input type="email" name="email" placeholder="Enter your email number"> <br>
    <label>Phone</label><input type="text" name="phone" placeholder="Enter your phone number"> <br>
    <input type="submit" name="submit" value="Send">
    </form>

    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql= "INSERT INTO students VALUES ('$id','$name','$email','$phone')";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Successfully insrted";
        }else{
            echo "Not Entry";
        }
    }
    ?>
    <br>
    <br>
    <a href="students_list.php">Students List</a>
</body>
</html>
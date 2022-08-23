<?php $db= new mysqli('localhost','root','','wdpf51'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Entry</title>
</head>
<body>

    <?php 
    if(isset($_POST['submit'])){
 
    extract($_POST);
    $sql= "INSERT INTO students VALUES ('$id','$name','$email','$phone')";
    $db->query($sql);
    if($db->affected_rows>0){
        echo "Successfully inserted";
    }
    }
    ?>

    <h3>Students Entry</h3>
    <form action="" method="POST">
        <input type="number" name="id" placeholder="Enter Student id"><br>
        <input type="text" name="name" placeholder="Enter Student name"><br>
        <input type="email" name="email" placeholder="Enter Student email"><br>
        <input type="text" name="phone" placeholder="Enter Student pnone"><br>
        <input type="submit" name="submit" value="SUBMIT"><br>
    </form>

    <a href="students_list.php">Students List</a>
</body>
</html>
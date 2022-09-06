

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
       <input type="number" name="id" placeholder="Enter your unique id number"><br>
       <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="email" name="email" placeholder="Enter your email number"><br>
       <input type="text" name="phone" placeholder="Enter your phone number"><br>
      <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php 
    if(isset($_POST['submit'])){

        extract($_POST);
        $sql= " INSERT INTO students1 VALUES ('$id','$name','$email','$phone')";
        $db->query($sql);

        if($db->affected_rows>0){
            echo "Successfully insrted";
        }

    }
    ?>
    <a href="students_list.php">Student List</a>
</body>
</html>
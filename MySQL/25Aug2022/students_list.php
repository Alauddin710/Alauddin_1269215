<?php $db= new mysqli('localhost','root','','wdpf51');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students list</h1>
    <?php 
    $sql= "SELECT * FROM students ";
    $result = $db->query($sql);

   $data = $result->fetch_object();
   $data1 = $result->fetch_assoc();
   echo "<pre>";
    print_r($data);
    print_r($data1);
   ?>

    <a href="students_entry.php">New Entry</a>
</body>
</html>
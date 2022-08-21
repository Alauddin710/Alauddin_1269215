
<?php $db= new mysqli('localhost','root','','wdpf51'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Entry system</title>
</head>
<body>
    <h1> Students Entry system</h1>
    <form action="" method="post">
        <input type="number" name="id" placeholder="uniq id"><br>
        <input type="text" name="name" placeholder="Enter name"><br>
        <input type="email" name="email" placeholder="Enter unique email"><br>
        <input type="text" name="phone" placeholder="Enter phone"><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>
    <a href="student_listsir.php">Entry</a>


    <?php 
// if(isset($_POST['submit'])){
    
// $id= $_POST['id'];
// $name=$_POST['name'];
// $email=$_POST['email'];
// $phone= $_POST['phone'];
// $output= $id. $name . $email. $phone;
// echo $output;
// }


 if(isset($_POST['submit'])){
 extract($_POST);
 $sql= " INSERT INTO students VALUES('$id','$name','$email','$phone')";
 $db->query($sql);
//  echo $db->affected_rows; // entry koita  hoi seta dekai

if($db->affected_rows>0){
echo " Successfully insrted";
}
 }
?>
</body>
</html>
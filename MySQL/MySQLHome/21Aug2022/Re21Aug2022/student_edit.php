<?php $db = new mysqli('localhost', 'root', '', 'wdpf51'); ?>
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
$id1 = $_GET['id'];         
$result = $db->query("SELECT * FROM students WHERE student_id=$id1") ;         
$data = $result->fetch_assoc(); // assoc hole nicer former modder id,name,email, phone aigula []er modde dite hobe
?>    
  <div class="container">        
    <h1>Students Update Form</h1>       
    <form action="" method="post">            
        <input type="number" name="id" value="<?php echo $data['student_id'];?>" placeholder="Enter student id"> <br>          
        <input type="text" name="name" value="<?php echo $data['student_name'];?>" placeholder="Enter yor name"> <br>
        <input type="email" name="email" value="<?php echo $data['student_email'];?>" placeholder="Enter your email"> <br>
        <input type="text" name="phone" value="<?php echo $data['student_phone'];?>" placeholder="Enter your  phone">


<input type="submit" name="submit" value="UPDATE">
</form>
<hr>
<a href="students_list.php">Students List</a>
</div>

<?php

extract ($_POST);
if(isset($submit)){
$sql = "UPDATE students SET student_id='$id', student_name='$name', student_email='$email',student_phone=$phone WHERE student_id=$id1";
$db->query($sql);

if($db->affected_rows>0){
header("Location:student_edit.php?id=$id");
// echo "Update Successfull";
}
}

?>

    
</body>
</html>
<?php $db = new mysqli('localhost', 'root', '', 'alauddin1269215'); ?>
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
echo $id = $_REQUEST['id'];

$sql = "SELECT * FROM students WHERE student_id = '$id'";
$result = $db->query($sql);
$data = $result->fetch_assoc();


    if(isset($_POST['submit'])){
        extract($_POST);
        $sql = "UPDATE students1 SET student_id = '$id', student_name = '$name', student_email = '$email', student_phone='$phone' WHERE student_id = '$id'";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Successfully Updated";
       }
    }
  
    ?>
    <h1>Student Entry System</h1>
    <form action="" method="post">
        <input type="number" name="id" value="<?php echo $id; ?>"placeholder="Enter Unique ID"><br>
        <input type="text" name="name" value="<?php echo $data['student_name']; ?>" placeholder="Enter name"><br>
        <input type="email" name="email" value="<?php echo $data['student_email']; ?>" placeholder="Enter unique email"><br>
        <input type="text" name="phone" value="<?php echo $data['student_phone']; ?>" placeholder="Enter phone number"><br>
        <input type="submit" name="submit" value="UPDATE">
    </form>
    <br>
    <a href="students_list.php">Student List</a>
    
</body>
</html>
<?php include_once("dbconfig.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
        <table class="table table-striped">
            <tr>    
                <th>ID</th>
                <th> Student Name</th>
                <th>Student Email</th>
                <th>Student phone</th>                
            </tr>
            
            <?php

                $sql = "SELECT * FROM students";
                $result = $db->query($sql);
                while($data = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $data['student_id']; ?></td>
                        <td><?php echo $data['student_name']; ?></td>
                        <td><?php echo $data['student_email']; ?></td>
                        <td><?php echo $data['student_phone']; ?></td>
                    </tr>
                <?php } ?>

        </table>

    </div>






//     $sql= "SELECT * FROM employees";
//     $result= $db->query($sql);

//     while ($data = $result->fetch_assoc()){
//    echo $data['employeeNumber'];
//    echo $data['firstName'];
//    echo $data['lastName'];
//    echo "<br>";
//}
    // print_r($data);

     // print_r($result);
    ?>
</body>
</html>
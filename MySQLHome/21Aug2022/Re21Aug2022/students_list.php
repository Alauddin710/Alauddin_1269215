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
  echo "<h2>Total rcord found $result->num_rows</h2>";

  echo "<table border='1'
    <tr>
    <th>Student ID</th>
    <th>Student Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th>
    </tr>";

  while($data = $result->fetch_object()){
    echo "<tr>";
    echo"<td>$data->student_id</td>";
    echo "<td>$data->student_name</td> ";
    echo "<td>$data->student_email</td>";
    echo"<td>$data->student_phone</td>";
   ?>
                        <td align="center">
                        <!-- Delete Button -->
                        <a href="student_delete.php?id=<?php echo $data->student_id ?>" onclick= "return confirm('Are you sure')"><img src="bin.jpg" width="30" alt=""></a>
                        <!-- Edit Button -->
                        <a href="student_edit.php?id=<?php echo $data->student_id ?>"><img src="pencil.png" width="20" alt=""></a>
                    </td>

   <?php
    echo "</tr>";
   
  }
 echo "</table>";
    ?>
    <a href="students_entry.php">New Entry</a>
</body>
</html>
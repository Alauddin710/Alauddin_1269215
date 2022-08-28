<?php include_once("dbconfig.php");?>

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

                $sql = "SELECT * FROM students";
                $result = $db->query($sql);
                echo " <h2> Total rcord found $result->num_rows </h2>";
                echo "<table border='1'> 
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actton</th>

                </tr>";
                while($data = $result->fetch_object()){
                    echo "<tr>";
                    echo "<td> $data->student_id </td>";
                    echo "<td> $data->student_name </td>";
                    echo "<td> $data->student_email </td>";
                    echo "<td> $data->student_phone </td>"; ?>

                   <td align="center"> 
                    <!-- delet button -->
                    <a href="student_delete.php?id=<?php echo $data->student_id?>" onclick="return confirm ('Are you sure')"> <img src="bin.jpg" width="30" alt="img"></a>
                      <!-- edidt button -->
                    <a href="student_edit.php?id=<?php echo $data->student_id?>" > <img src="pencil.png" width="30" alt="edit"></a>
                
                </td> 
                   <?php
                    echo "</tr>";
                    
                   

                    // echo "ID: ". $data->student_id;
                    // echo "Name: ". $data->student_name;
                    // echo "Email: ". $data->student_email;
                    // echo "Phone: ". $data->student_phone;
                    // echo "<br>";
                }
                echo "</table>";
                     ?>

        






</body>
</html>
<?php $db = new mysqli('localhost','root','','exam2');?>

<h2>Students Reusult view</h2>
<table border="1">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student Mobile</th>
        <th>Total Marks</th>
    </tr>
    <?php
    $sql= "SELECT * FROM students_result_view";
    $result = $db->query($sql);
    while($row= $result->fetch_assoc()){?>
    <tr>
        <td><?php echo $row['stid']; ?></td>
        <td><?php echo $row['stname']; ?></td>
        <td><?php echo $row['stmobile']; ?></td>
        <td><?php echo $row['rtotal_marks']; ?></td>
    </tr>

    <?php
    }
    ?>
    
</table>
<a href="students.php">Show Students</a>
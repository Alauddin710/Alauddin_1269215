<?php $db= new mysqli('localhost','root','','alauddin1269215'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students list</title>
</head>
<body>

    <?php 
    $sql="SELECT * FROM students";
    $result= $db->query($sql);
    ?>

    <h1>Students list</h1>
    <h2>Total Record fund <?php echo $result->num_rows?></h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php 
        while($data = $result->fetch_object()){?>
            <tr>
                <td><?php echo $data->student_id ?></td>
                <td><?php echo $data->student_name ?></td>
                <td><?php echo $data->student_email ?></td>
                <td><?php echo $data->student_phone ?></td>
                <td align="center">
                <a href="student_delete.php?id=<?php echo $data->student_id; ?>" onclick="return confirm ('Are you sure')"><img src="bin.png" width="30" alt=""></a>

                <a href="student_edit.php?id=<?php echo $data->student_id; ?>" onclick="return confirm('Are you sure edit')"><img src="pencil.png" width="30" alt=""></a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <a href="students_entry.php">New Entry</a>
</body>
</html>

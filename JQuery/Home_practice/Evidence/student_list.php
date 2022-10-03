<?php
 $db = new mysqli("localhost","root","","wdpf51_batches");
$id =  $_GET['bid'];
$sql = "SELECT * FROM students WHERE stu_batch_id='$id'";
$result = $db->query($sql);
echo '<option value="" disabled selected>Select one</option>';
while($row = $result->fetch_assoc()){

    echo '<option value=" '.$row['stu_id'].' ">'. $row['stu_name'] . "</option>"; 
}
?>


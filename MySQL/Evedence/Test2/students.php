<?php $db= new mysqli('localhost','root','','wdpf51_exam2'); ?>

<?php 
if(isset($_POST['student_submit'])){
extract($_POST);
$sql= "CALL add_students('$st_name','$st_address','$st_mobile')";
$db->query($sql);
if($db->affected_rows>0){
    echo "Added";
}
}
?>
<?php 

//delete
if(isset($_POST['submit'])){
$id= $_POST['st_id'];
$sql= "DELETE FROM students WHERE stid='$id'";
$db->query($sql);
if($db->affected_rows>0){
    echo "Deleted";
}
}
?>
    
    <form action="" method="POST">
    <select name="st_id" id="">
    <option value="" disabled selected >Select One</option>

    <?php 
    $sql= "SELECT * FROM students";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()){?>
    <option value="<?php echo $row['stid']; ?>"><?php echo $row['stname']; ?></option>


    <?php  
    }
    ?>
    </select>
    <input type="submit" name="submit" value="Delete">
    </form>
    <h2>Student Entry</h2>
    <form action="" method="POST">
        <input type="text" name="st_name" placeholder="Enter stname"> <br>
        <input type="text" name="st_address" placeholder="Enter stname"> <br>
        <input type="text" name="st_mobile" placeholder="Enter mobile"> <br>
        <input type="submit" name="student_submit" value="SAVE"> <br>
    </form>


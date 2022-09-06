<?php $db = new mysqli('localhost','root','','exam2');?>


    <?php 
    //student Entry
    if(isset($_POST['st_submit'])){
        extract($_POST);
        $sql= "CALL add_students ('$s_name','$s_address','$s_mobile')";
         $db->query($sql);
        if($db->affected_rows>0){
            echo "added";
        }
    }
    ?>
    <?php 
    //delete
    if(isset($_POST['submit'])){
        $id= $_POST['st_id'];
        $sql= "DELETE FROM students WHERE stid=$id";
         $db->query($sql);
        if($db->affected_rows>0){
            echo "Deleted";
        }
    }
    ?>
    <form action="" method="POST">
        <select name="st_id" id="">
        <option value="" disabled selected>Select One</option>
    <?php
    $sql= "SELECT * FROM students";
    $result = $db->query($sql);
    while($row= $result->fetch_assoc()){?>

    <option value="<?php echo $row['stid']; ?>"><?php echo $row['stname']; ?></option>

    <?php
    }
    ?>
    </select>
    <input type="submit" name="submit" value="DELETE">
    </form>
    <h2>Students Entry</h2>
    <form action="" method="POST">
        <input type="text" name="s_name" placeholder="Enter Student name"><br>
        <input type="text" name="s_address" placeholder="Enter Student address"><br>
        <input type="text" name="s_mobile" placeholder="Enter Student mobile"><br>
        <input type="submit" name="st_submit" value="Save">
    </form>
    <a href="results.php">Show results</a>
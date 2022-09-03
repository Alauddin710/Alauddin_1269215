<?php $db= new mysqli('localhost','root','','exam3'); ?>


    <?php 
    //Entry
    if(isset($_POST['manufacturer_submit'])){
        extract($_POST);
        $sql= "CALL add_manufacturer ('$manu_nm','$manu_add','$manu_ph')";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Added";
        }
    }
    ?>

    <?php 
    //Delete
    if(isset($_POST['submit'])){
        $id= $_POST['manu_id'];
        $sql= "DELETE FROM manufacturer WHERE id='$id'";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Deleted";
        }
    }
    ?>

    <form action="" method="post">
    <select name="manu_id" id="">
        <option value="" disabled selected>Select One</option>
    <?php 
    $sql = "SELECT * FROM manufacturer";
    $result= $db->query($sql);
    while($row=$result->fetch_assoc()){?>
    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>

<?php
    }
    ?>
    </select>
    <input type="submit" name="submit" value="DELETE">
    </form>

    <h2>manufacturer Entry</h2>
    <form action="" method="post">
        <input type="text" name="manu_nm" placeholder="Manufacturer Name"> <br>
        <input type="text" name="manu_add" placeholder="Manufacturer Address"> <br>
        <input type="text" name="manu_ph" placeholder="Manufacturer Phone"> <br>
        <input type="submit" name="manufacturer_submit" value="SAVE"> <br>
    </form>
<a href="products.php">Show products</a>

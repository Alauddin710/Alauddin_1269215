<?php $db = new mysqli('localhost','root','','exam2'); ?>
<?php 
    //Entry
    if(isset($_POST['manufacturer_submit'])){
        extract($_POST);
        $sql="CALL add_manufacturer('$manu_name','$manu_address','$manu_ph')";
      $db->query($sql);
        if($db->affected_rows>0){
            echo "Added";
        }
    }
    ?>

<?php 
    //delete
    if(isset($_POST['submit'])){
        $id= $_POST['manu_id'];
        $sql="DELETE FROM manufacturer WHERE id=$id";
         $db->query($sql);
        if($db->affected_rows>0){
            echo "Deleted";
        }
    }
    ?>


    
    <form action="" method="POST">
        <select name="manu_id" id="">
        <option value="" disabled selected>Select One</option>
    <?php 
    $sql= "SELECT * FROM manufacturer";
    $result= $db->query($sql);
    while($row=$result->fetch_assoc()){?>
     
        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
    <?php
    }
    ?>
    </select>
    <input type="submit" name="submit" value="DELETE">
</form>

<h2>Manufacturer Entery</h2>
<form action="" method="POST">
    <input type="text" name="manu_name" placeholder="Enter Your name"><br>
    <input type="text" name="manu_address" placeholder="Enter Your name"><br>
    <input type="text" name="manu_ph" placeholder="Enter Your name"><br>
    <input type="submit" name="manufacturer_submit" value="Save">
</form>
<a href="products.php">Show Products</a>
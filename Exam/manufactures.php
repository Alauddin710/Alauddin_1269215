

<?php $db= new mysqli('localhost','root','','compnay'); ?>

<?php 
//insert Data
if(isset($_POST['manu_submit'])){
    extract($_POST);
    $sql = "CALL add_manufacturer('$manu_nm','$manu_add','$manu_ph')";
    $db->query($sql);
    if($db->affected_rows>0){
        echo "added";
    }
}
?>

<?php 
//delete
if(isset($_POST['submit'])){
    $id= $_POST['manu_id'];
    $sql = "DELETE FROM manufacturer WHERE id='$id'";
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
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()){?>

     <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
     
    <?php
    }
    ?>
</table>
</select>
<input type="submit" name="submit" value="Delete">
</form>
<h2>Manufacturer Insert Data</h2>
<form action="" method="POST">
    <input type="text" name="manu_nm" placeholder="Entr Your name"><br>
    <input type="text" name="manu_add" placeholder="Entr Your address"><br>
    <input type="text" name="manu_ph" placeholder="Entr Your phone"><br>
    <input type="submit" name="manu_submit" value="SAVE">
</form>
<br>

<a href="products.php">Show Products</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Manufacturer Id</th>
    </tr>

    <?php 
    $sql= "SELECT * FROM manufacturer";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()){?>
     <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <th><?php echo $row['contact_no'];?></th>
    </tr>

    <?php
    }
    ?>
</table>


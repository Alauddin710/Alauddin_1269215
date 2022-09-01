<?php 
$db= new mysqli('localhost','root','', 'wdpf51_exam');

?>

<?php 
if(isset($_POST['submit'])){
    $id = $_POST['manu_id'];
}
?>

    <form action="" method="post">
        <select name="manu_id" id="">
            <option value="" disabled selected>Select One</option>
    <?php 

    $sql= "DELETE * FROM manufacturer";
    $result = $db->query($sql);
    while($row= $result->fetch_array()){?>
    
        <option value="<?php echo $row['id']; ?>"><td><?php echo $row['name']; ?></td></option>
       
    <?php
    }
   
    ?>
    </select>
    <input type="submit" name="submit" value="DELETE">
    </form>

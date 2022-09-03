<?php $db= new mysqli('localhost','root','','exam3'); ?>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Manufcturer</th>
    </tr>

    <?php 
    $sql = "SELECT * FROM product_info_view";
    $result= $db->query($sql);
    while($row=$result->fetch_assoc()){?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['manufacturer_name'];?></td>
    </tr>

<?php
    }
  
    ?>
   
</table>
<br>
<a href="manufacturers.php">Show manufacturer</a>
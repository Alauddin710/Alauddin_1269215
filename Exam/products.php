<?php $db= new mysqli('localhost','root','','compnay'); ?>

<h2>View Product</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Manufacturer Id</th>
    </tr>

    <?php 
    $sql= "SELECT * FROM product_info_view";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()){?>
     <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <th><?php echo $row['manufacturer_id'];?></th>
    </tr>

    <?php
    }
    ?>
</table>
<br>
<a href="manufactures.php">Show Manufacture</a>
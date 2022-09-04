<?php $db = new mysqli('localhost','root','','exam2'); ?>

<h2>Prduct Table</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Prodcut Name</th>
        <th>Price</th>
        <th>Manufacturer</th>
    </tr>

    <?php 
    $sql= "SELECT * FROM product_info_view";
    $result= $db->query($sql);
    while($row=$result->fetch_assoc()){?>
     <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['manufacturer_name']; ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<br>
<a href="manufacturers.php">Show Manufacturer</a>
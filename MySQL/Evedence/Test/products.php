<?php 
$db= new mysqli('localhost','root','', 'wdpf51_exam');

?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>price</th>
        <th>manufacturer</th>
    </tr>
    <?php 
    $sql= "SELECT * FROM product_info_view";
    $result = $db->query($sql);
    while($row= $result->fetch_array()){?>
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
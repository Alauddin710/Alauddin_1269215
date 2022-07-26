<?php 
$coutries = array("Bangladesh"=>"Dhaka","Pakistan"=>"Islamabad","India"=>"Dilli","Bhutan"=>"Khathmondu","Bangladesh"=>"Dhaka");

// asort($coutries);
// echo "<pre>";
// print_r($coutries);

?>

<table border="1">
    <tr>
        <th>Country name</th>
        <th>Capital name</th>
    </tr>
<?php

foreach($coutries as $country=>$capital){?>
<tr>
    <td><?php echo $country  ?></td>
    <td><?php echo $capital ?></td>
</tr>
<?php

}
?>
</table>
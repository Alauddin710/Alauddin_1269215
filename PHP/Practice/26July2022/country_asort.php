<?php 
$counries = array(
    "Bangladesh"=>"Dhaka",
    "Pakistan"=>"Islamabad",
    "India"=>"Dilli",
    "Nepal"=>"Bhutan",
    "Srilangka"=>"Colombo",
);
// asort($counries);
// echo "<pre>";
// print_r($counries) ;

?>
<table border="1">
    <tr> 
        <th>SL Name</th>
        <th>Country Name</th>
        <th>Capital Name</th>
    </tr>
<?php
$sr =1;
foreach($counries as $country=>$capital){?>
<tr>
     <td><?php echo $sr  ?></td>
    <td><?php echo $country ?></td>
    <td><?php echo $capital ?></td>
    
</tr>
<?php
$sr++;
}
?>
</table>
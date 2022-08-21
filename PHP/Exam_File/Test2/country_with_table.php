<?php 
$countries = array("Bangladesh"=>"Dhaka", "Pakistan"=>"Islamabad","Nepal"=>"Bhutan");


echo "<table border='1' 
<tr>
<th>Sl No</th>
<th>Country Name</th>
<th>Capital Name</th>
</tr>";

$count=1;
foreach($countries as $country=>$capital){
    echo " <tr>
    <td>$count</td>
    <td>$country</td>
    <td>$capital</td>
    </tr>";
    $count++;
}
echo "</table>";
?>
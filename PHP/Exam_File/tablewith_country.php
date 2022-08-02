<?php 
$countries= array("Bangladesh"=>"Dhaka", "Pasistan"=>"Islamabad","Srilanka"=>"Colombo","Nepal"=>"Bhutan" );

// asort($countries);
// echo "<pre>";
// print_r($countries);

echo "<table border='1'
<tr>
<th>Sl. No</th>
<th>Country Name</th>
<th>Capital Name</th>
</tr>";
$count=1;
foreach($countries as $country=>$capital){
    echo "<tr>
    <td>$count</td>
    <td>$country</td>
    <td>$capital</td>
    </tr>";
    $count++;
}
echo "</table>";
?>
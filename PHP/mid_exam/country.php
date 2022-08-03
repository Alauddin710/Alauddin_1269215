<?php 
$countries= array("Bangladesh"=>"Dhaka", "Pasistan"=>"Islamabad","Srilanka"=>"Colombo","Nepal"=>"Bhutan" );

// asort($countries);
// echo "<pre>";
// print_r($countries);

echo "<table border='1'
<tr>

<th>Country Name</th>
<th>Capital Name</th>
</tr>";

foreach($countries as $country=>$capital){
    echo "<tr>
    <td>$country</td>
    <td>$capital</td>
    </tr>";
}
echo "</table>";
?>
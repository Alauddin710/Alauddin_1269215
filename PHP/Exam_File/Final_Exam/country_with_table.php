<?php 

$countries = array("Bangladesh"=>"Dhaka","India"=>"Delhi","Pakistan"=>"Islamabad","Nepal"=>"Bhutan","Srilanka"=>"Colombo");

echo "<table border='1'
<tr>
<th>Sl Number</th>
<th>Country Name</th>
<th> Capital Name</th>

</tr>";

$count=1;
foreach($countries as $country=>$capital){
    echo" <tr>
    <td>$count</td>
    <td>$country</td>
    <td>$capital</td>
    </tr>";
    $count++;
}
echo "</table>";
?>
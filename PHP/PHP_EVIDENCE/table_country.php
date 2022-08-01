<?php 
$countries= array("Bangladesh"=>"Dhaka","Pakistan"=>"Islamabad","Srilanka"=>"Colombo","Nepal"=>"Bahutan","Australia"=>"Sydni");

echo "<table border='1'> 
<tr>
<th>SL. No</th>
<th>Country Name</th>
<th> Capital name</th>
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


<?php 
$coutries = array("Bangladesh"=>"Dhaka","Pakistan"=>"Islamabad","India"=>"Dilli","Bhutan"=>"Khathmondu","Bangladesh"=>"Dhaka");

// asort($coutries);
// echo "<pre>";
// print_r($coutries);

echo "<table border='1'> 
<tr>
<th>Sl Name</th>
<th>Country Name</th>
<th>Capitla Name</th>
</tr> ";
$sr =1;
foreach($coutries as $country=>$capital){
echo "<tr>
<th>$country</th>
<th>$capital</th>
<th>$sr</th>
</tr>";
$sr++;
}
echo "</table>";
?>

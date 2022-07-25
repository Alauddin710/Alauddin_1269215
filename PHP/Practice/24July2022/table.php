<?php 
// $students = array();

// $students ["1269215"] = "Alauddin";
// $students ["1269216"] = "Pintu";
// $students ["1269217"] = "Helal";
// $students ["1269218"] = "Rana";
// $students ["1269219"] = "Razu";
// $students ["1269220"] = "Biplob";
// $students ["1269221"] = "Abdullah";

// echo "<h1>Students Table</h1>";
// // Creating Table
// echo "<table border='1' wide='400'>";
// echo "<tr><th>SI. No</th> <th>ID</th> <th>Student Name</th>
// </tr>";
// $count=1;
// foreach($students as $ID=>$student){
// echo "<tr><td>$count</td> <td>$ID</td> <td>$student</td></tr>";
// $count++;
// }
// echo "</table>";
?>

<?php 
$students = array();
$students ["1269215"]= "Alauddin";
$students ["1269217"] = "Razu";
$students ["1269218"] = "Helal";
$students ["1269219"] = "Pintu";
$students ["1269220"] = "Komol";
$students ["1269221"] = "Rana";
$students ["1269222"] = "Alo";

echo "<h1>Students Table</h1>";
//starting table
echo "<table border='1' >";
echo "<tr>
<th>SI. No</th>
<th>ID</th>
<th>Students Name</th>
</tr>";
$count = 1;
foreach($students as $ID=>$student){
echo "<tr>
<td>$count</td>
<td>$ID</td>
<td>$student</td>
</tr>";
$count++;
}

echo "</table>";
?>
<?php $db = new mysqli("localhost","root","","jquery_ev");

$d_id = $_GET['divisionsid'];
$sql = "SELECT * FROM districts WHERE division_id='$d_id'";
$result = $db->query($sql);
echo '<option value="" disabled selected>Select One</option>';
while($row = $result->fetch_assoc()){

   echo '<option value=" '.$row['dist_id'].' ">'. $row['dist_name'] . "</option>"; 

}
?>



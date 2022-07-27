<?php 
$division = array ("Dhaka", "Sylhet", "Khulna");
echo "<pre>";
print_r($division);
array_unshift($division, "Rajshai", "Chottogram");
echo "Applied Array_shift for add from begining";
print_r($division);
array_pop($division);
echo "Applied Array_shift for remove from ending";
print_r($division);
array_shift($division);
echo "Applied Array_shift for remove from begining";
print_r($division);
array_push($division,"Brisal","Rangpur");
echo "Applied Array_shift for add from last";
print_r($division);
?>
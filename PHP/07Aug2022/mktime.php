<?php 
echo mktime(2022);
echo "<br>";
$time = mktime(06,00,10,1,1,2022);
echo date("d-m-y", $time)
?>
<hr>

<?php 
$current= time();

$time = mktime(06,00,10,7,1,2022);
$diff = $current-$time;
$days = round($diff/60/60/24);
echo $days;
?>


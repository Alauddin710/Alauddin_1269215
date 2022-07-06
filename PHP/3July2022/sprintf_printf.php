<?php 
$distance =40;
$place= "Mawa";
printf("Dhaka to %s is total %d km", $place, $distance);
echo "<br>"
?>

<?php 
$meal ="Bakorkhani";
$price= 180.00;
printf("Today's %s price is taka %f km", $meal, $price); // akane%f onek sonka nibe dosomicer por
echo "<br>";
printf("Today's %s price is taka %.2f km", $meal, $price); //%.2f dara sudo 2 gor projonto dosomic niebe
echo "<br>"
?>

<?php 

//$cost
$output = 
sprintf("Today's %s price is taka %.2f km", $meal, $price); // akaene sprintt aka kono output dai na oke alada variable rakte hobe
echo $output;
?>



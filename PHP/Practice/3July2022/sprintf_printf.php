<?php 
$distance= "150";
$place =" Khulna";
printf("Dhaka to %s is total%d km" ,$place,$distance);
echo "<br>";
?>

<?php 
$meal= "Bakorkhani";
$price =180.00;
printf("%s price  is total taka %.2f " ,$meal,$price); //%.2f dara sudo 2 gor projonto dosomic niebe
echo "<br>";
?>

<?php 
$meal= "Bakorkhani";
$price =180.00;
printf(" Todays %s price  is total taka %f " ,$meal,$price); //%f dara sudo 6 gor projonto dosomic niebe
echo "<br>";
?>
<?php 
$meal= "Bakorkhani";
$price =180;
$output= sprintf("Todays %s price  is total taka %.2f ",$meal,$price);
  // akaene sprintf aka kono output dai na oke alada variable rakte hobe
echo $output;
?>


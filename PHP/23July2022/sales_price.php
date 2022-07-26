<?php 
// function salesPrice($cost,$trans){
// $total= $cost+ ($cost * $trans);
// return $total;
// }
// // echo salesPrice(100,5)
// echo salesPrice(845,5);
?>



<?php 
// function salesPrice($cost,$trans){
// $total= $cost+ ($cost * $trans);
// return $total;
// }
// $x=500;
// $y= 15;
// echo salesPrice($x,$y);
?>



<?php 
function salesPrice($cost,$trans=5){
$total= $cost+ ($cost * $trans/100);
return $total;
}
$x=500;
$y= 15;
echo salesPrice($x, $y);
?>
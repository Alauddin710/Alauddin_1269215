<?php 
// $x=15;
// $abc= function(){
//     //$x=10;
//     global $x;
//     $x +=100;
//     echo $x. "<br>";
// };
// $abc();
// //echo $x;
?>

<?php
$x=20;
function myFunction(){
    global $x;
    $x +=150;
    echo $x ."<br>";
}
$output="myFunction";
$output();
echo $x;
?>
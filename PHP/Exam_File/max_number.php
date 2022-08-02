<?php 
function largest(){
$numbers= array(10,50,40,70,5,90,100);

$max=0;
foreach($numbers as $number){
    if($numbers>$max){
        $max=$number;
    }else{
        $max=$max;
    }
 } return $max;
}
echo largest(70);
?>
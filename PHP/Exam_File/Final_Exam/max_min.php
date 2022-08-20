<?php
 $numbers= [50,90,40,600,150,300,200];
$max= $numbers[0];
$min= $numbers[0];
 for($i=0; $i<count($numbers);$i++){
    if($max>$numbers[$i]){
        $max=$max;
    }else{
        $max=$numbers[$i];
    }
    if($min<$numbers[$i]){
        $min= $min;
    } else{
        $min=$numbers[$i];
    }
 }
 echo "Maximum numberis: " .$max. "<br>";
 echo "Maximum numberis: " .$min. "<br>";
?>
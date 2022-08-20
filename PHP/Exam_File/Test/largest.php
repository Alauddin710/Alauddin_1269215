
<?php 
    
$numbers= array(50,60,90,150,50,200);
$max= $numbers[0];
$min = $numbers[0];

for($i=0; $i<count($numbers);$i++){
    if($max>$numbers[$i]){
        $max=$max;
    } else{
        $max=$numbers[$i];
    }if($min<$numbers[$i]){
        $min=$min;
    }else{
        $min=$numbers[$i];
    }
}
echo $max;
echo $min;
?>
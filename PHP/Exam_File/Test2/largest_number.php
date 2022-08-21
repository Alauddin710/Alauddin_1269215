<?php 
// function largest(){
//     $numbers = array(52,10,20,40,400,520);
//     $max=0;
//     for($i=0; $i<count($numbers);$i++){
//         if($numbers[$i]>$max){
//             $max=$numbers[$i];
//         }else{
//             $max=$max;
//         }
       
//     } return $max;
// }
// echo largest(52);
?>
<?php 

 $numbers = array(52,10,20,40,400,520);
 $max=$numbers[0];
 $min=$numbers[0];
 for($i=0; $i<count($numbers); $i++){
    if($max>$numbers[$i]){
        $max=$max;
    }else{
        $max= $numbers[$i];
    }if($min<$numbers[$i]){
        $min = $min;
    }else{
        $min=$numbers[$i];
    }
 }
 echo "Maximum number is:".$max. "<br>";
 echo "Minimum number is:".$min. "<br>";
?>
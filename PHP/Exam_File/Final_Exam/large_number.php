<?php 

//  lagrset();


// function lagrset(){
//     $x=50;
//     $y=40;
//     $z=30;
//     $u=20;
//     if($x>$y && $x>$z){
//         return " $x is a large number";
//     }elseif($y>$x && $y>$z){
//         return "$y is large number";
//     } else{
//         return " $z is large number";
//     }
// }

?>

<?php 
function largest(){
    $numbers=array(50,60,90,100,60,20,150);
    $max=0;
    for($i=0; $i<count($numbers);$i++){
        if($numbers[$i]>$max){
            $max= $numbers[$i];
        }
        else{
            $max=$max;
        }
    } return $max;
}
echo largest();
?>


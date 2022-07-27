<?php 
$numbers = array(2,5,6,7,9,12,36,55,79);
foreach($numbers as $num){
    if($num%2==0){
        echo "$num is a Even numbers <br>";
       
    } else{
        echo " $num is odd number <br>";
       
    }
}
?>
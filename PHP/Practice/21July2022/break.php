<?php 
// $number=array(5,15,20,30);
// echo $randnumer=rand(1,50);
// echo "<br>";
// echo in_array($randnumer,$number);
?>

<?php 
// $prime=array(2,3,5,7,11,13,17,19,23,29,31,37,29,41,43,47);

// for($i=1; $i<100; $i++){
//     echo "<h1>$i</h1>";
//     $randnumer= rand(1,50);
//     if(in_array($randnumer,$prime)){
//         echo "Found my prime number$randnumer ";
//     } else{
//         echo "Not Found $randnumer in prime list";
//         //break;
//     }
// }
?>

<?php
$prime= array(2,3,7,11,13,17,19,23,29,31,37,41,39,43,47);

for($i=1; $i<100; $i++){
    echo "<h1>$i</h1>";
   $randnumber=rand(1,3);
   if(in_array($randnumber,$prime)){
    echo "Found my prime number $randnumber";
    break;
   }else{
    echo "Not Found prime number $randnumber ";
    //break;
   }
}
?>
<?php 
$students=array("Dipu","Naimur","Anamul","Aklima","Rabbany");

//echo count($students)
 for ($i=0; $i<count($students); $i++){
    if ($students[$i]=="Dipu"){
    continue;
    }
    echo $students[$i]. "<br>";
    }

    
?>
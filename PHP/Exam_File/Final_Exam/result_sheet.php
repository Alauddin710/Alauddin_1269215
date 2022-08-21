<?php 
$results= array(
    array("ID"=>1, "Name"=>"student1", "MCQ"=>40,"Descriptive"=>37,"Evedence"=>30),
    array("ID"=>2, "Name"=>"student2", "MCQ"=>28,"Descriptive"=>40,"Evedence"=>40),
    array("ID"=>1, "Name"=>"student1", "MCQ"=>45,"Descriptive"=>39,"Evedence"=>45),

);

// foreach($results as $result){
//     list($id, $name, $mcq, $des,$eve)= array_values($result);
//     if($mcq+$des>=70 && $eve>=30){
//         echo " ID: $id Name: $name Written " .($mcq+$des). " Resutl: Pass <br>";
//     }else{
//         echo " ID: $id Name: $name Written " .($mcq+$des). " Resutl: Fail <br>";
//     }
// }

foreach($results as $result){
    list($id, $name, $mcq, $desc, $evd)= array_values($result);
    if($mcq+$desc>=70 && $evd>=30){
        echo " ID: $id Name: $name written: " .($mcq+$desc). " Result: Pass <br>";
    }else{
        echo " ID: $id Name: $name written: " .($mcq+$desc). " Result: Fail <br>";

    }
}

?>
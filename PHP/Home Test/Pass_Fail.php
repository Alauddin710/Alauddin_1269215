<?php 
$sutdents= array(
    array("ID"=>1, "Name"=>"Student1", "MCQ"=>40, "DESCRIPTIVE"=>37, "EVIDENC"=>30),
    array("ID"=>2, "Name"=>"Student1", "MCQ"=>28, "DESCRIPTIVE"=>40, "EVIDENC"=>40),
    array("ID"=>2, "Name"=>"Student1", "MCQ"=>45, "DESCRIPTIVE"=>39, "EVIDENC"=>45),
);
    foreach($sutdents as $student){
        list($id,$name,$mcq,$des,$ev) = array_values($student);
        if($mcq+$des>=70 && $ev>=30){
            echo "ID: $id Name: $name Written". ($mcq+$des). "Result: Pass <br>";
          
        }else {
            echo "ID: $id Name: $name Written". ($mcq+$des). "Result: Fail <br>";
        }
    }
?>

<?php

$vak = 453;
$_POST['guess']= 442;
 if ($_POST['guess']== $vak){
echo " Congratulations!";
 } elseif((300-$vak)<10){
echo" You're getting close!";
 } else{
echo " Sorry!";
 }
?>

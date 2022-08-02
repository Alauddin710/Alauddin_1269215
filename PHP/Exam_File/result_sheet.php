<?php 
$results= array(
    array("ID"=>1,"Name"=>"Student1","MCQ"=>40,"Descriptive"=>37,"Evidence"=>30),
    array("ID"=>2,"Name"=>"Student2","MCQ"=>28,"Descriptive"=>40,"Evidence"=>40),
    array("ID"=>3,"Name"=>"Student3","MCQ"=>45,"Descriptive"=>39,"Evidence"=>45)
);

foreach($results as $student){
  list($id, $name, $mcq, $desc, $evd) = array_values($student); // sudu value golo print kore
  if($mcq+$desc>=70 && $evd>=30){

    echo " ID: $id  Name: $name Written " . ($mcq+$desc) . "Result: Pass <br>";
  } else{
    echo " ID: $id  Name: $name Written " . ($mcq+$desc) . "Result: Fail <br>";
  }
}
?>
<?php 

// echo $_GET['mydata'];
if($_GET['mydata']=='good'){
$persons = array("Pinto","Masum","Rana","Rabbany","Fazol");
echo getNames($persons);
} elseif($_GET['mydata']=='bad'){
    $persons = array("Alo","alauddin","Dipu","Fyzulla","Naymur");
    echo getNames($persons);
}
function getNames($items){
$output = "<ul>";
for($i=0; $i<count($items); $i++){
    $output.= "<li>".$items[$i]. "</li>";
}
$output .="</ul>";
return $output;
}

?>
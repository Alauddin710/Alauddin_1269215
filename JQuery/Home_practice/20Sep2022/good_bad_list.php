<?php 
// echo $_GET['mydata'];

if($_GET['mydata']=='good'){
    $good = array("Alo","Alauddin","Rana","Pintu","Sumon");
    echo getNames($good);
}elseif($_GET['mydata']=='bad'){
    $bad = array("Naymur","Rahaman","Razu","Sukla","Takla");
    echo getNames($bad);
}


function getNames($items){
    $output= "<ul>";
    for($i=0; $i<count($items);$i++){
        $output.= "<li>".$items[$i]."</li>";
    }
    $output.= "</ul>";
    return $output;
}

?>
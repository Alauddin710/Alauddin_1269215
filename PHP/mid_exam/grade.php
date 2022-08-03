<?php 
function test($n){
if ($n=="A"){
    return " Excelent";
}elseif($n=="B"){
    return "Good";
} elseif($n=="C"){
    return "Fair";
} elseif($n=="D"){
return "Poor";
} elseif($n=="F"){
return "Fail";
}
}

echo test("B");
?>
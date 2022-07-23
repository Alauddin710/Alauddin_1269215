<?php 
$students= array("Dipu"=>"Barishal", "Rabbany"=>"Thukurgoan");
echo<<<ABC
We have two students. One is Dipu and another is Rabbany.
Dipu home district is {$students['Dipu']} and Rabbany home District is {$students['Rabbany']}; <br> 
ABC;

$dipu= "Dipu";
$rabbany="Rabbany";

echo <<<DEF
We have two students. One is Dipu and another is Rabbany.
Dipu home district is $dipu and Rabbany home District is $rabbany <br> 
DEF;
?>
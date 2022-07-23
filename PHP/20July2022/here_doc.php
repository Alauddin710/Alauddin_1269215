<?php 
$stuedents = array ("Dipu"=> "Barisal", "Rabbany"=>"Thakurgaon");
//no space or tab after identification
echo <<<ABC
We have two stuents. one is Dipu and another is Rabbany.
Dipu's  home disrtict is {$stuedents['Dipu']} and Rabbany's home district is {$stuedents['Rabbany']}; <br> <br>
ABC;



$dipu ="Dipu";
$rabbany ="Rabbany";
echo <<<DEF
We have two stuents. one is Dipu and another is Rabbany.
Dipu's  home disrtict is $dipu and Rabbany's home district is $rabbany
DEF;
?>
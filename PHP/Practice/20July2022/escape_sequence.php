<?php 
$output= "This one line.\tAnd is another line";
$output2= "This one line.\rAnd is another line";
//$output= "This one line.\tAnd is another line";
//$output= 'This one line.\nAnd is another line';
$output1= 'This one line.'."\n". 'And is another line';
//echo "<br>";
//echo "<pre>";
echo $output."\n";
//echo "<br>";
echo $output1;
//echo "<br>";
echo $output2;
//echo "<br>";
?>

<?php
$stuendts=array("Dipu"=> "Barisal", "Rabbany"=>"Thakurgaon");
//echo $stuendts['Dipu'];
//echo "Dipu's home distric is".$stuendts['Dipu']. "<br>";
echo "Dipu's home distric is{$stuendts['Dipu']}";

?>
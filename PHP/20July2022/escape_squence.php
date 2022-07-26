<?php 
$output= "This is one line.\t And is another line.";
// $output= "This is one line.\n And is another line.";
// $output= "This is one line.\r And is another line.";
$output1= 'This is one line.\n And is another line.';
$output2= 'This is one line.'."\n". 'And is another line. <br>' ;

echo "<pre>";
echo $output;
echo"<br>";

echo $output1;
echo"<br>";
echo $output2;
?>

<?php 
$stuedents = array ("Dipu"=> "Barisal", "Rabbany"=>"Thakurgaon");
// echo $stuedents['Dipu'];
echo " Dipu's home district is ".$stuedents['Dipu'] . "<br>";
echo " Dipu's home district is {$stuedents['Dipu']}";
?>
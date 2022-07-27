<?php 
$output= "This is one line.\t And is another line."; // \t akta tab tori hoi
// $output= "This is one line.\n And is another line.";
// $output= "This is one line.\r And is another line.";
$output1= 'This is one line.\n And is another line.';
$output2= 'This is one line.'."\n". 'And is another line. <br>' ;

echo "<pre>";// এখানে ইকো প্রি দিলে ওপরের লাইনের আউটপুট গুলো কেমন হবে দেখা যাবে।
echo $output;
echo"<br>";

echo $output1;
echo"<br>";
echo $output2;
?>

<?php 
$students = array("Dipu"=> "Barisal", "Rabbany"=>"Thakurgaon");
// echo $students['Dipu'];
//echo " Dipu's home district is ".$students['Dipu']. "<br>";
echo " Dipu's home district is {$students['Dipu']}";
?>
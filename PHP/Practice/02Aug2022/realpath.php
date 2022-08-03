<?php 
$path = "myfile.txt";
$output = realpath($path); // real path ba / full path jana jai
echo $output;
echo "<br>";
$path1 = "../24July2022/users.txt";// . akta dot mane akdhap age .. dot mane 2 dhap age file
$output1 = realpath($path1);
echo $output1;
?>
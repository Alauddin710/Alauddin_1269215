<?php 
// $subject= array("PHP","Java","Oracle","Python","c#");
// foreach($subject as $sub){
// echo "$sub is my subject <br>";
// }
?>


<?php 
$langues= array(
"PHP"=>"http://www.php.net",
"Java"=>"http://www.java.com",
"Java"=>"http://www.java.com",
"Oracle"=>"http://www.Oracle.com",
"Python"=>"http://www.python.org",
"c#"=>"http://www.asp.net"
);

// foreach($langues as $lang=>$site){
// echo "$lang my language is <br>";
// }
foreach($langues as $lang=>$site){
//echo "$lang my language is $lang and it's site is <a href=\"$site\">$site</a> <br>";
echo "$lang my language is $lang and it's site is <a href=\"$site\" target=\"_blank\">$site</a> <br>";
}
?>

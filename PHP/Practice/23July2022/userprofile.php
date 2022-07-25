<?php 
function userProfile(){
    $profile =array ("Apple","Organe","lemon","Mango","lichi","Tomato");
    return $profile;
}
$output =userProfile();
echo "<pre>";
var_dump($output);
echo "<br>";
list($a, $o, $l, $m, $ch, $t) = userProfile();
echo $a."<br>". $o."<br>". $l."<br>". $m."<br>". $ch."<br>". $t;


?>
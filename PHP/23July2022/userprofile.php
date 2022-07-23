<?php 
function userProfile(){
    $profile= array("Golam Rabbani","Round 51", "WDPF");
    return $profile;
}
$x=userProfile();
echo "<pre>";
var_dump($x);

list($name, $round, $course)= userProfile();
echo $name;
?>

<?php 
// function userProfile(){
//     $profile= array("Golam Rabbani","Round 51", "WDPF");
//     return $profile;
// }
// $x=userProfile();
// echo "<pre>";
// var_dump($x);

// list($name, $round, $course)= $x;
// echo $name;
?>
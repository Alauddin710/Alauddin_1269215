<?php 
$players = array();// eta na dileo hoi hobe dimentio array ketre
$players ["Bangladesh"]= array("Tamim","Sakib","Rahmim");
$players ["Srilanka"]= array("Sangakara","Dilshan","Mahela");
$players ["Autralia"]= array("Smith","maxwell","Warner");

echo "<pre>";
print_r($players);

// foreach($players as $player){
// vprintf("Player1: %s Player2: %s Player3: %s <br>" , $player);
// }
foreach($players as $country=>$player){
    echo "<h1> $country</h1>";
    foreach ($player as $pl){
        echo $pl . ", ";
    }
    echo "<br>";
}
?>
<?php 
$players =array();
$players[]= array("Tamim", "Shakib","Rahmim");
$players []= array("Sangakara","Dilshan","Mhaela");
$players[]= array("smith","David", "warner");
echo "<pre>";
print_r($players);

// foreach($players as $player){
// vprintf("Player1: %s Player2: %s Player3: %s <br>", $player);
// }


foreach($players as $player){
    foreach($player as $pl){
        echo $pl. ",";
    }
    echo "<br>";
}
?>
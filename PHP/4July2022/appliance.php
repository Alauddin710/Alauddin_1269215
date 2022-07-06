<?php 
class Appliance{

    public $age;
    public $name;
    public function setDetails($age,$name){
        $this->age= $age;
        $this->name=$name;
    }
}
$fridge =new Appliance();

$fridge->setDetails(10,"singer");
// print_r($fridge);
var_dump($fridge);
?>
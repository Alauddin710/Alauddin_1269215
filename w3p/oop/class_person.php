<?php 
class person{
    private $name = "";
    private $age = "";
    public function setName($name=""){
        $this->name= $name;
    }
    public function setAge($age= "20"){
        $this->age=$age;
    }
    public function getInfo(){
        echo "Hello, my name is".$this->name. "and my age is".$this->age. "Years.";
    }
}
$person = new person();
$person->setName("Alauddin");
$person->setAge("33");
$person->getInfo();
?>
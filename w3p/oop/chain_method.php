<?php 
class person{
    private $name = "";
    private $age = "";
    public function setName($name=""){
        $this->name= $name;
        return $this;
    }
    public function setAge($age= "20"){
        $this->age=$age;
        return $this;
    }
    public function getInfo(){
        echo "Hello, my name is".$this->name. "and my age is".$this->age. "Years.";
    }
}
$person = new person();
$person->setName("Alo")->setAge("32")->getInfo();

?>
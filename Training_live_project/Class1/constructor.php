<?php 
class Person{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }
    public function PersonDetails(){
        echo " This is person Name: {$this->name} and person Age is: {$this->age}";
    }
}
$obj= new Person("Alauddin",30);
$obj->PersonDetails();
?>
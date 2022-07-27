<?php 
class Employee{
    private $title;
     private $name;
     public function getName(){
        return
         $this->name;
     }

     public function setName($x){
        $this->name=$x;
     }
     public function sayHello(){
        $msg= " {$this->name}, Welcome to OOP";
        //return $msg;
        echo $msg;
     }
}

$obj1=new Employee;

$obj1->setName("Hasan");
$obj1->sayHello();


print_r($obj1) ."<br>";
var_dump($obj1);

?>
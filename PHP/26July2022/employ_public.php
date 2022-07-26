<?php 
class Employee{
    public $title= "Mr.";
     private $name;
     public const AGE= 20; // const call korle :: call korte hobe
     public function getName(){
        return
         $this->name;
     }

     public function setName($x){
        $this->name=$x;
     }
     public function sayHello(){
        $msg= " {$this->name}, Welcome to OOP";
        $msg.= SELF::AGE;
        //return $msg;
        echo $msg;
     }
}

$obj1=new Employee;
echo $obj1->title;

$obj1->setName("Hasan");
$obj1->sayHello();

print_r($obj1) ."<br>";
var_dump($obj1);

?>
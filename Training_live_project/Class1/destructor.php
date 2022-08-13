<?php 
class Person{
    public $name;
    public $age;
    public $id;

    public function __construct($name, $age)
    {
       $this->name=$name; 
       $this->age=$age; 
    }
    public function SetId($id){
        $this->id= $id;
    }
    public function __destruct()
    {
        if(!empty($this->id)){
            echo " peerson saving";
        }
    }
}
$obj= new Person("Alauddin", "30");
$obj->SetId(12);
?>
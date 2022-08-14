<?php 
class Employee{
    private $name;

    public function setName($name){
       $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
$emp1= new Employee();
$emp1->setName("Rabbany");
$emp2 =  $emp1;
$emp2->setName("Tokey");

print_r($emp1);
echo "<br>";
print_r($emp2);

?>
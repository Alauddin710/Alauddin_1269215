
<?php 
class Employee
{
 private $name;
 private $title;
 protected $wage;
 public function getName() {
 return $this->name;
 }
 public function setName($name) {
 $this->name = $name;
 }
 public function sayHello() {
 echo "Hi, my name is {$this->getName()}.";
 }
 public function setwage($money){
    $this->wage= $money;
 }
}

class Progamer extends employee{
    public function bonus(){
        $amount = $this->wage;
        return $amount;
    }
}

$obj1= new Progamer();
$obj1->setName("Rabbany");
$obj1->setWage(10000);
echo $obj1->bonus(5)


?>




<?php 
// class Employee
// {
//  private $name;
//  private $title;
//  public function getName() {
//  return $this->name;
//  }
//  public function setName($name) {
//  $this->name = $name;
//  }
//  public function sayHello() {
//  echo "Hi, my name is {$this->getName()}.";
//  }
// }

// $obj = new Employee();
// $obj->setName("Rabbany");
// echo $obj->getName();
// // print_r($obj);

// $obj->sayHello();
?>
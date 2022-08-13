<?php
// class Employee {
//  private $name;
//  function setName($name) {
//  $this->name = $name;
//  }
//  function getName() {
//  return $this->name;
//  }
// }
// $emp1 = new Employee();
// $emp1->setName('Rabbany');
// $emp2 = clone $emp1; // ata mane clone dara alada object bujabe
// $emp2->setName('Tokey');

// print_r($emp1);
// echo "<br>";
// print_r($emp2);
?>

<?php
class Employee {
 private $name;
 function setName($name) {
 $this->name = $name;
 }
 function getName() {
 return $this->name;
 }
}
$emp1 = new Employee();
$emp1->setName('Rabbany');
$emp2 = $emp1; // ata dara alada object bujabe
$emp2->setName('Tokey');
print_r($emp1);
echo "<br>";
print_r($emp2);
?>
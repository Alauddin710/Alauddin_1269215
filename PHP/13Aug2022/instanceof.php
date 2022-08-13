<?php 

// class Teacher{

// }
// class Student{

// }
// $st= new Student();
// if($st instanceof Student){
// echo "Yes";
// } else{
//     echo "No";
// }
?>

<?php 

// class Teacher{

// }
// class Student{

// }
// $st= new Student();
// if($st instanceof Student){
// echo "Yes";
// } else{
//     echo "No";
// }
// echo "<pre>";
// echo class_exists("Teacher");// ata ase kina check kore boolen answer dibe

// echo "<br>";
// echo get_class($st);
?>

<?php 

// class Teacher{
// function Teach(){

// }
// function assinment(){

// }
// }
// class Student{

// }
// $st= new Student();
// if($st instanceof Student){
// echo "Yes";
// } else{
//     echo "No";
// }
// echo "<pre>";
// echo class_exists("Teacher");// ata ase kina check kore boolen answer dibe

// echo "<br>";
// echo get_class($st);
// echo "<br>";
// $method= get_class_methods("Teacher");
// print_r($method);
?>

<?php 

class Teacher{
public $name;
public $age;
public $qualification;


function Teach(){

}
function assinment(){

}
}
class Student{

}
$st= new Student();
if($st instanceof Student){
echo "Yes";
} else{
    echo "No";
}
echo "<pre>";
echo class_exists("Teacher");// ata ase kina check kore boolen answer dibe

echo "<br>";
echo get_class($st);
echo "<br>";
$method= get_class_methods("Teacher");
print_r($method);
echo "<br>";
$vars=get_class_vars("Teacher");
print_r($vars);
?>
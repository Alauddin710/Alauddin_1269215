<?php 
class Teacher{

}
class Student{

}
$st= new Student();

if($st instanceof Student){
    echo "Yes";
}else{
    echo "No";
}
echo "<pre>";
echo class_exists("Teacher");// bolen answer dai
echo "<br>";
echo get_class($st);
echo "<br>";
$method = get_class_methods("Teacher");
print_r($method);
echo "<br>";
$vars=get_class_vars("Teacher");
print_r($vars);
?>
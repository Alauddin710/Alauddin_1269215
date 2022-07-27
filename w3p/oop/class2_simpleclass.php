<?php 
class simpleClass{
    //property declaration
    public $var = "Hello simpleClass";
    //method declaration
    public function sayHello(){
        echo $this->var;
    }
}
$obj = new simpleClass();
$obj->sayHello();
?>
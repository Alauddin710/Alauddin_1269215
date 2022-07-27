<?php 
class simpleClass{
    public $var='a default value'; // public property declaration
    public const a="America";// private constant Declaration

    // public method declaration
    public function displayVar(){
       echo $this->var;
    }
 
}
$obj= new simpleClass(); // Object Call
$obj->displayVar();
/*
access class method using Object Variable $obj
 Result: Hello Simple Class
*/
?>
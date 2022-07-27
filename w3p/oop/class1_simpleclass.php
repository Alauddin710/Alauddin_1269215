<?php

class simpleClass{
    //property declaration
    public $var= "Hello simple Class";
    public const a="America";
    // Static method declaration
    public static function sayHello(){
        echo "Hello World <br>";
    }

}
$obj= new simpleClass();
$obj->sayHello();
echo simpleClass::a;
?>
<?php
class simpleClass
{
    //property declaration
    static public $var = "Hello simpleClass";
    const a = "America";

    //method declaration
    public function sayHello()
    {
        echo self::$var . "<br>"; // use self with scope resolution Operator
        echo self::a;
    }
}
$obj = new simpleClass();
$obj->sayHello();


?>
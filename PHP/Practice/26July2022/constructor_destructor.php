<?php

use oop as GlobalOop;

class oop{
    private $name;
    public function __construct($x)
    {
        $this->name=$x;
        echo $this->name. "Yes, I am here <br>";
    }
    public function sayHello()
    {
        echo " Hello World";
    }
    public function __destruct()
    {
        echo "Oop object says bye bye <br>";
    }
}
$obj= new oop("Dipu");
$obj->sayHello();
?>
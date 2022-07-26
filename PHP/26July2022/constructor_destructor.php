<?php 
class oop{
    private $name;
    public function __construct($x){
        $this->name=$x;
        echo$this->name . "Yes, I am here <br>";
    }
    public function sayHello(){
        echo "Hello World";
    }
    public function __destruct()
    {
        echo "oop Object says bye bye <br>";
    }

}
$ob= new oop("Dipu");
$ob->sayHello();
?>
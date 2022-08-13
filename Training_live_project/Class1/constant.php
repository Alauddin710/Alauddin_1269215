<?php 
class userData{
    public $user;
    public $id;
    const Name = "Alauddin";

    public function __construct($user, $id)
    {
        $this->user = $user;
        $this->id = $id;
        echo "This name is: {$user} and Id name Is: {$id}";
    }
    public function __destruct()
    {
        unset($this->user);
        unset ( $this->id);
    }
    public function dissPlay(){
        echo "Full name is:" .userData::Name;
    }
}
$user = "alo";
$id= "30";
$obj= new userData($user,$id);
echo "<br>";
$obj->dissPlay();
?>
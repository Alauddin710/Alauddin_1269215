<?php 
class userData{
    public $user;
    public $id;

    public function __construct($user, $id)
    {
        $this->user = $user;
        $this->id   = $id;
        echo "This is user name: {$user} and Id Name is : {$id}";
    }
    public function __destruct()
    {
        unset($this->user);
        unset($this->id);
    }
}
$user= "Alauddin";
$id= "30";
$obj= new userData($user, $id);

?>
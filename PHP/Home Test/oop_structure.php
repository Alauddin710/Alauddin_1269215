<?php 
class Students{
    public $name;
    public $age;
    public $setId;
   public function __construct($name, $age)
   {
        $this->name=$name;
        $this->age= $age;

   }
   public function setId($id){
    $this->id=$id;
   }
   public function __destruct()
   {
    if(!empty($this->id)){
        echo "Saving ID";
    }
   }
}
$obj= new Students("alo","30");
$obj->setId(12);
unset($obj);

?>

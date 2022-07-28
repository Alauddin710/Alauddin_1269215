
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php 
class student{
    public $id;
    public $name;
    public $batch;
    public $lines;
    
    public function __construct()
    {
        $lines= file('results.txt'); // akane je data golo ase se golo opore $lines modde chole jabe
        $this->lines=$lines;
    }
    public function result($sid){
        foreach($this->lines as $line){
            list($id, $name, $batch, $result)= explode(", ", $line); // explode kaj holo data alada kora
            if($id==$sid){
                $output = "ID: $id <br>";
                $output .= "Name: $name <br>";
                $output .= "Batch: $batch <br>";
                $output .= "Result: $result <br>";
            }
        }
        return $output;
    }
}

?>
    <?php 
    if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $st1= new student();
    echo $st1->result($id);
}
    ?>
    <h3> Result Search</h3>
    <form action="" method="Post">
        <input type="text" name="id"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>


<?php



class student{
    // public $id;
    // public $name;
    // public $batch;
    // public $lines;
    public function __construct(){
        $lines = file('results.txt');
        $this->lines= $lines;
    }
    public function result($sid){
        foreach($this->lines as $line){
            list($id, $name, $batch, $result)= explode(",", $line);
            if($id==$sid){
                $output = "Name: ID $id <br>";
                $output .= "Name $name <br>";
                $output .= "Batch: $batch <br>";
                $output .= "Result: $result <br>";

                
            }
        }
        return $output;
    }
}
$std =new student;
$std->result(1);
?>




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
    $_POST['submit'];
    $id= $_POST['id'];
    $st1= new student;
    echo $st1->result($id);
    ?>

    <h1>Students result</h1>
    <form action="" method="POST">
    <input type="text" name="id">
    <input type="submit" name="submit" value="Search">
    </form>
</body>
</html>
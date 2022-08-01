<?php 
class students{
    // public $id;
    // public $name;
    // public $batch;
    // public $result;
    // public $lines;
    public function __construct()
    {
        $lines= file('res.txt');
        $this->line= $lines;
    }
    public function resultF($sid){
        foreach($this->line as $line){
            list($id, $name, $batch, $result)= explode(",", $line);
            if($id==$sid){
                
                echo "ID: $id <br>";
                echo "Name: $name <br>";
                echo "Batch: $batch <br>";
                echo "Result: $result <br>";
            }    
        }
        
    }
}

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
    if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $std= new students();
   echo $std->resultF($id);
}
    ?>

    <h1>Students Result</h1>
    <form action="" method="POST">
        <input type="text" name="id">
        <input type="submit" name="submit" value="Search">
    </form>
</body>
</html>
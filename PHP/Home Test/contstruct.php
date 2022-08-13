
<?php 
if(isset($_POST['submit'])){

$recive= $_POST['number'];
$output= new students();
echo $output->results($recive);
}
class students{
    public function __construct()
    {
        $lines= file("results.txt");
        $this->line = $lines;
    } 
    public function results($sid){
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
    <h3>Students Result</h3>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="Enter your id number"> <br>
        <input type="submit" name="submit" value="Send">
    </form>
</body>
</html>
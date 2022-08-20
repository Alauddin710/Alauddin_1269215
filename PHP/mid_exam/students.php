<?php
if(isset($_POST['submit'])){
$receive= $_POST['id'];
$st1= new students;
$output= $st1->results($receive);
echo $output;
}
class students{
    public function __construct()
    {
        $lines= file('res.txt');
        $this->line= $lines;
    } public function results($sid){
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

new students;
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
    <h4> Students Result</h4>
    <form action="" method="POST">
        <input type="text" name="id" placeholder="Enter your id number"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>
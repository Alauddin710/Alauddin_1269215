
<?php 

$_REQUEST['submit'];
$id =$_REQUEST['id'];
$st1 = new students();
$output =$st1->result($id);

echo $output; 
class students{
public function __construct()
{
    $lines= file('result.txt');
    $this->line =$lines;
} public function result($sid){
foreach($this->line as $line){
    list($id,$name, $batch, $result)= explode(",",$line);
    if($id==$sid){
        echo " $id <br>";
        echo " $name <br>";
        echo " $batch <br>";
        echo " $result <br>";
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
    <title>Students Result</title>
</head>
<body>
    <h3>Students Result</h3>
    <form action="" method="POST">
        <input type="text" name="id" placeholder="Enter Your id number"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
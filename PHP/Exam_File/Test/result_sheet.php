
<?php 
if(isset($_POST['submit'])){

    $numbers = $_POST['id'];
    $result = new students();
    $output = $result->results($numbers);
    echo $output;

}
class students{
    public function __construct()
    {
        $files= file('result.txt');
        $this->file=$files;
    }
    public function results($sid){
        
        foreach($this->file as $line){
            list($id, $name, $batch, $result)= explode("," ,$line);
            if($id==$sid){
                echo "Id: $id <br>";
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
    <form action="" method="POST">
        <input type="text" name="id" placeholder="Enter your id number"><br>
        <input type="submit" name="submit" value="Send">
    </form>
</body>
</html>
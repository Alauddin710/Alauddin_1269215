
<?php
if(isset($_POST['submit'])){

    $number= $_POST['number'];
    $result= new students();
    echo $result->results($number);
}

class students{
    public function __construct()
    {
       $lines= file('retext.txt');
       $this->line = $lines;
    }
    public function results($sid){
        foreach($this->line as $line){
            list ($id, $name, $btch, $result)= explode(",", $line);
            if($id= $sid){
                echo " ID: $id <br>";
                echo " Name: $name";
                echo " ID: $id";
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
    <h3>result </h3>
    <form action="" method="POST">
        <input type="text" name="number"><br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
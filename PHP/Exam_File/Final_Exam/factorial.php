<?php 
if(isset($_POST['submit'])){
    $number= $_POST['number'];
    $output = factorial($number);
    echo " $number  factorial number is $output";
}

function factorial($n){
    if($n==0){
        return 1;
    } else{
        return $n * factorial($n-1);
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
    <h3>Factorial number Check</h3>
    <form action="" method="POST">
        <input type="text" name="number"><br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
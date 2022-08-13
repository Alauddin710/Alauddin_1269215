<?php 
$_POST['submit'];
$output = $_POST['number'];
$result=primeCheck($output);
echo  $result;

function primeCheck($n){
    if($n==1){
        return "$n is not prirm number";
    }elseif($n==2){
        return " $n is prime number";
    } for($i=2;$i<$n; $i++){
        if($n%$i==0){
            return "$n is not prime number";
        }else{
            return " $n is a prime number";
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
    <h4>prime number Check</h4>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your number"><br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
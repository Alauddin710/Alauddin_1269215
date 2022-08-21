<?php
if(isset($_POST['submit'])){
    $number= $_POST['number'];
    echo primeCheck($number);
}

function primeCheck($n){
    if($n==1){
    return "$n is a not prime number";
    } elseif($n==2){
        return " $n is a prime numbere";
    } 
    for($i=2;$i<$n; $i++){
        if($n%$i==0){
            return " $n is not prime number";
        } else{
            return " $n is prime number";
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
    <h3>Prime number</h3>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="Enter yournumber"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
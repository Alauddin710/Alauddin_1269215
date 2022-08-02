
<?php 
$_POST['submit'];
$prime= $_POST['number'];
$output= primeCheck($prime);
echo $output;

function primeCheck($n){
if($n==1){
   return " $n is not number";
} elseif($n==2){
    return " $n is a prime number";
}
for($i=2; $i<$n; $i++){
    if($n%$i==0){
        return " $n is  not a prime number";
    } else{
        return "$n is a prime number";
    }
}
}
//echo primeCheck(8);
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
    <h1>Prime Check</h1>
    <form action="" method="post">
    <input type="text" name="number" placeholder="Enter number"> <br>
    <input type="submit" name="submit" value="Check">
    </form>
   
</body>
</html>
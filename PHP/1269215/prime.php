
<?php 

if(isset($_POST['submit'])){
$output= $_POST['number'];
echo primeCheck($output);
}
function primeCheck($n){
    if($n==1){
        return "$n is not prime number";
    } if($n==2){
        return "$n is a prime number";
    } for($i=2; $i<$n; $i++ ){
        if($n%$i==0){
            return "$n is a not prime number";
        } else{
            return "$n is a prime number";
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
    <h4>Prime number</h4>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter number"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
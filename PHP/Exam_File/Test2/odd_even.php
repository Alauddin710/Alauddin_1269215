<?php 

if(isset($_POST['submit'])){
$number= $_POST['number'];
echo oddEven($number);
}
function oddEven($n){
    if ($n==1){
        return "$n is a odd number";
    }elseif($n==2){
        return "$n is Even number";
    }for($i=2; $i<$n; $i++){
        if($n%$i==0){
            return "$n is Even number";
        }else{
           return "$n is odd number";
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
    <h3>odd even number Check</h3>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="Enter your number"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
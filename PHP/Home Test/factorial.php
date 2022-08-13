<?php 
$_POST['submit'];
$output= $_POST['number'];
$result= facChechk($output);
echo "Tha factorial number is:". $result;
function facChechk($n){
    if($n==0){
        return 1;
    }else{
        return $n*facChechk($n-1);
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
    <h4>Factorial Check</h4>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your number"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
$formdatarecive= $_POST['number'];
$output= oddEven($formdatarecive);
echo "<h1> $output</h1>";
}

function oddEven($n){
    if($n==1){
        echo " $n is a odd number";
    }elseif($n%2==0){
        echo " $n is Even number";
    } else{
        echo " $n is odd number";
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
    <h4>Odd Even number Check</h4>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your number"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

if(isset($_POST['submit'])){
    $recive= $_POST['number'];
    $output = oddeven($recive);
    echo $output;
}

function oddeven($n){
if($n==1){
return " $n is a odd number";
}for($i=1; $i<$n; $i++){
if($n%2==0){
return "$n is even a number";
} else{
    return " $n is a odd number";
}
}
}

?>

<form action="" method="post">
    <input type="text" name="number" placeholder="Enter your number"> <br>
    <input type="submit" name="submit" value="Check">
</form>
</body>
</html>
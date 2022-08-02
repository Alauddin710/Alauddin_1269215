<?php 
if(isset($_POST['submit'])){
$recive= $_POST['number'];
$output= factCheck($recive);
echo $output;
}
function factCheck($n){
if($n==0){
    return 1;
}else{
    return $n * factCheck($n-1);
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
    <h1> Check Factorial number</h1>
    <form action="" method="POST">
    <input type="text" name="number" placeholder="Enter yoru factorial number"> <br>
    <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
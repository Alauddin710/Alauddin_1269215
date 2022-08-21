<?php 

if(isset($_POST['submit'])){
$number = $_POST['number'];
$output = fact($number);
echo "$number Factorial is $output";
}
function fact($n){
    if($n==0){
        return 1;
    }else{
        return $n*fact($n-1);
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
    <h3>Factorial Number Check</h3>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="Enter your number"><br>
        <input type="submit" name="submit" value="Check"><br>
    </form>
</body>
</html>
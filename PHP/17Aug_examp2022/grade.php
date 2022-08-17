

<?php 

$_POST['submit'];
$mark=$_POST['number'];
if($mark>=90 && $mark<=100){
echo "The result is A+";
} elseif($mark>=80 && $mark<=89){
echo " The result is A";
}elseif($mark>=60 && $mark<=79){
    echo " The result is A";
}elseif($mark>=0 && $mark<=59){
        echo " The result is A";
}elseif($mark==""){
echo "Error";
}
else{
    echo "The result is Fail";
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
    <h3>Students Result</h3>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="Please Enter your number"><br>
        <input type="submit" name="submit" value="Result">
    </form>
</body>
</html>
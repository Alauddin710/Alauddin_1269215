<?php 
if(isset($_POST['submit'])){

$mark= $_POST['number'];

if($mark>=90){
    echo "Result is A+";
}elseif($mark>=80){
    echo "Result is A";
}
elseif($mark>=100){
    echo "Error Result";
}
else{
    echo " Result is Faild";
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
    <h3>Students Result</h3>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="Please Enter Your number">
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>
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

   
    $res= $_POST['number'];
    $output= fact($res);
    echo "$res factorial number is a = $output";
}
    function fact($n){
        if($n==0){
            return 1;
        }else{
            return $n*fact($n-1);
        }
    }
    ?>

    <form action="" method="POST">
        <input type="text" name="number" placeholder="Enter your number">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>
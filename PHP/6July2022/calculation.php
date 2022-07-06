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

    //print_r($_POST)
    // if(isset($_POST['submit'])){
    //     //echo "Yes"
    //    $f=$_POST['first'];
    //    $l=$_POST['last'];

    //    $sum = $f+$l;
    //    $sub = $f-$l;
    //    echo "Your Frist number is $f <br>";
    //    echo "Your Last number is $l <br>";
    //    echo "Sum of those number is".$sum ."<br>";
    //    echo "Sum of those number is".$sub ."<br>";
    //    echo "Multiply of those number is". $f * $l ."<br>";
    //    echo "Divided of those number is". $f / $l ."<br>";
    //print_r($_POST)
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $f=$_POST['first'];
       $l=$_POST['last'];

        if($f==''|| $l==''){ //if( empty($f) || empty($f)){  //if($f==null|| $l=='null'){
       
            echo "Put both values";
        } else{
        $sum = $f+$l;
       $sub = $f-$l;
       echo "Your Frist number is $f <br>";
       echo "Your Last number is $l <br>";
       echo "Sum of those number is".$sum ."<br>";
       echo "Sum of those number is".$sub ."<br>";
       echo "Multiply of those number is". $f * $l ."<br>";
       echo "Divided of those number is". $f / $l ."<br>";
        }
       
    }
    ?>
    <h1>Calculation Form</h1>
    <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="first" placeholder="Enter first number"><br>
    <input type="text" name="last" placeholder="Enter last number"><br>
    <input type="submit" name="submit" value="CALCULATION">
    </form>
</body>
</html>
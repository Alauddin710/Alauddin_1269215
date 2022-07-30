<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green{
            color: green;
            padding: auto;
        }
    </style>
</head>
<body>
    
<?php 
    if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $output=fact($number);
    echo "<h3 class='green'> $number factorial is $output !</h3>";
    }
    function fact($n){
        if($n==0){
            return 1;
        } else{
            return $n * fact($n-1);
        }
    }
    //echo fact(5);// php outputer maddome
    
?>
<form action="" method="POST">
    <input type="text" name="number" placeholder="Enter your factorial number"> <br>
    <input type="submit" name="submit" value="CHECK">
</form>
</form>
</body>
</html>
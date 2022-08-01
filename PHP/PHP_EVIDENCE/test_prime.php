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
   $output= primeCheck($recive);
   echo $output;
}
   function primeCheck($x){
    if($x==""){
        return "You can not input 0!";
    }elseif($x==1){
        return " $x not a prime number";
    } elseif($x==2){
        return "$x is prime number";
    }else{
        for($i=2; $i<$x; $i++){
            if($x%$i==0){
                return " $x is not a Prime number";
            }
        }
        return " $x is a prime number ";
    }
   }
    ?>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="Enter your Check number"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
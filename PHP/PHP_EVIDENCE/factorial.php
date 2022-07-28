<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 

//    $fact= $_POST['number'];
//    $output= calc_factorial($fact);
//    echo $output;

//  function calc_factorial($n){
//     if($n==0){
//         return 1;
//     } else{
//         return $n * calc_factorial($n-1);
//     }
//  }

//  $n=5;
//  $fact= calc_factorial($n);
//  echo " Factorial = $fact";

?>

<!-- <form action="" method="POST">
    <input type="text" name="number" placeholder="Enter your factorial number">
    <input type="submit" name="submit" value="check">

</form>
	 -->

<?php 

  if(isset($_POST['submit'])){

 
 $num = $_POST['number'];
 $output = fact($num);
 echo  $output;
}

function fact($n){
    if($n<=1){
        return 1;
    }else{
        return $n*fact($n-1);
    }
}
?>

     <form action="" method="post">
        <input type="text" name="number" placeholder=" Enter your factorial naumber"> <br>
        <input type="submit" name="submit" value="CHECK">
     </form>
</body>
</html>

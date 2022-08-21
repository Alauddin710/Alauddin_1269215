<?php 
if(isset($_POST['submit'])){
$mcq=$_POST['mcq'];
$desc=$_POST['desc'];
$evd=$_POST['evd'];

if($mcq+$desc>=70 && $evd>=30){
    echo "Result is Pass";
}else{
    echo "Result is Fail";
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
    <h3>Result Check</h3>
    <form action="" method="POST">
        Mcq:<input type="text" name="mcq" placeholder="Enter your mcq number"> <br>
        Desc:<input type="text" name="desc" placeholder="Enter your desc number"> <br>
        Evd: <input type="text" name="evd" placeholder="Enter your evd number"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
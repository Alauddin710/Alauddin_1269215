


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="mcq" placeholder="Enter your number"> <br>
        <input type="text" name="desc" placeholder="Enter your number"> <br>
        <input type="text" name="evd" placeholder="Entr your evd number"> <br>
        <input type="submit" name="submit" value="Send"> <br>
    </form>

    <?php 
    if(isset($_POST['submit'])){

     $mcq = $_POST['mcq'];
     $desc = $_POST['desc'];
     $evd = $_POST['evd'];

     if($mcq+$desc>=70 && $evd>=30){
        echo "Result is A+";
     }else{
        echo " Result is Fail";
     }
    }
    ?>
</body>
</html>
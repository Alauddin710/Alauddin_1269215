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


    //echo $_POST['mynum'];
    $guess=120;
    if($_POST['mynum']==$guess){
        echo"Congratulations";
    }else{
        echo "sorry";
    }
}
    ?>
    <h1>Guess the number</h1>
    <form action="" method="POST">
        <input type="text" name="mynum" placeholder="Guess the number">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else if</title>
</head>
<body>

    <?php 

//     if(isset($_POST['submit'])){

    
//     //echo $_POST['mynum'];
    
//     $guess=150;
//     if($_POST['mynum']==$guess){
//         echo "Congratulations";
//     } elseif(abs($guess-$_POST['mynum'])<10){
//         echo "You are very close";
//     }else{
//         echo "Sorry";
//     }
// }
    ?>

    <!-- <h1>Guess the number</h1>
    <form action="" method="POST">
        <input type="text" name="mynum" placeholder="Guess the number">
        <input type="submit" name="submit" value="CHECK">
    </form> -->

    <?php 
    //echo $_POST['mynum'];
    if(isset($_POST['submit'])){
    $guess=150;
    if($_POST['mynum']==$guess){
        echo "Congratulations";
    }elseif(abs($guess-$_POST['mynum'])<10){
        echo "You are very close";
    }else{
        echo "Sorry/Not Fund";
    }
}
    ?>

    <h1>Guess the number</h1>
    <form action="" method="post">
        <input type="text" name="mynum" placeholder="Guess the number">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>
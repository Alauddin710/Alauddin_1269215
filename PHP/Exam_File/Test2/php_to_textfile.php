<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Text send to text file</h3>
    <form action="" method="POST">
        <input type="text" name="file"> <br>
        <input type="submit" name="submit" value="Send"> <br>
    </form>

    <?php 
    $data= $_POST['file'];
    $fh= fopen('text.txt',"a");
    fwrite($fh,$data) ;
    fwrite($fh,"\n") ;
    

    fclose($fh);
    ?>
</body>
</html>
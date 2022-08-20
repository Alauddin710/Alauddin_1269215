<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File send to text</h3>
    <form action="" method="post">
        <input type="text" name="file"> <br>
        <input type="submit" name="submit" value="Send">
    </form>

    <?php    
    $data = $_POST['file'];
     $fh = fopen("text.txt", 'a');

    fwrite($fh, $data);

    fclose($fh);

    // $_POST['submit'];
    ?>
</body>
</html>
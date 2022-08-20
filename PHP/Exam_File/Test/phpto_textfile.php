<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Php to text File read</h3>
    <form action="" method="POST">
        <input type="text" name="text" placeholder="Enter your name"> <br>
        <input type="submit" name="submit" value="Send">
    </form>

    <?php 
    $data= $_POST['text'];
    $fh = fopen($fh, $data);

    
    ?>
</body>
</html>
<?php 
$title= "My first page";
$body = "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error libero excepturi aspernatur expedita unde porro voluptatem suscipit! Qui beatae fugit sint incidunt sit animi, totam accusamus voluptates harum ut odit!</p>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo$title ?></title>
</head>
<body>
 <?php echo $body?>   
 <hr>

 <?php echo  "I want show {$title} and {$body}"; ?>

<?php echo "{$title} and {$body}";?>

<?php 
    $x=10;
    echo "{$x}_abc"; // stringer sate abc ante ba kono lika ante curly baket deoa lagbe;
?>
</body>
</html>
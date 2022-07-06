<?php 
$title = "My page title";
$body = "<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, est iusto voluptatem laboriosam in quas nisi quidem ipsam, maxime facilis corrupti corporis suscipit, temporibus repellat rem ipsum cumque pariatur repudiandae. </p>"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo$title; ?> </title>
</head>
<body>
    <?php echo $body; ?>
    <hr>

    <?php echo " I Want to show {$title} and {$body}" ?>

    <?php $x=10;
    echo "{$x}_abc"; // strinng er sate abc ante hole curly baket deoa lagbe
    ?>
</body>
</html>
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
    $division= array ("Dhaka", "Sylhet", "Khulna");
    ?>
    <table> 
        <tr>
            <th>Division Name</th>
        </tr>
    <?php
    foreach($division as $div){ ?>
    <tr>
        <th> <?php echo $div; ?>
    </th>
    </tr>
    <?php}
    ?>
    </table>
</body>
</html>
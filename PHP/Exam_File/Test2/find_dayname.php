<?php 
if(isset($_POST['submit'])){


$date = $_POST['date'];
$d= date("d", strtotime($date));
$l= date("l", strtotime($date));
$y = date("Y", strtotime($date));
$m = date("M", strtotime($date));


echo "$date= Year: $y, Month: $m, Day: $d, Weekday: $l";

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
    <h3>Find out Day name</h3>
    <form action="" method="post">
        <input type="date" name="date" placeholder="Enter your select date"><br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
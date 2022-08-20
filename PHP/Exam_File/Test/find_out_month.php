<?php
$_POST['submit'];
$date = $_POST['date'];

$d= date("d", strtotime($date));//Date
$l = date("l", strtotime($date)); // Weekday
$y = date("Y", strtotime($date));//Year
$m= date("M", strtotime($date));//Month

echo " $date = Year: $y, Month: $m, Day: $d, Weekday: $l";


//$date = "2019-01-09";
// $date = $_POST['date'];

// $d = date("d", strtotime($date)); //Date
// $l = date("l", strtotime($date)); //Weekday
// $y = date("Y", strtotime($date)); //Year
// $m = date("M", strtotime($date)); //Month

// echo "$date = Year:$y, Month:$m, Day:$l, Date:$d";


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
    <h3>Find Out month</h3>
    <form action="" method="POST">
        <input type="date" name="date" placeholder="Select date"><br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
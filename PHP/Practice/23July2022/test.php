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
if(isset($_GET['cat'])){
$cat= $_GET['cat'];
switch($cat){
    case "news";
    echo " You have selected news";
    break;
    case "weather";
    echo " You have selected weather";
    break;
    case "sports";
    echo " You have selected sports";
    break;
    default:
    echo " You have selected Catagory";
}
}
?>
    <form action="" method="$_GET">
        <select name="cat">
            <option value="">Select One</option>
            <option value="news">News</option>
            <option value="weather">Weather</option>
            <option value="sports">Soprots</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>

    <?php 
    // $cat= $_GET['cat'];
    // switch($cat){
    // case"news":
    // echo "You have selected news";
    // break;
    // case"weather":
    // echo "You have selected weather";
    // break;
    // case"sports":
    // echo "You have selected sports";
    // break;
    // default:
    // echo "You have selected catagory.";
    // }
    // ?>
  
 <!-- <form action="">
    <h1>Catagory wise message</h1>

    <select name="cat">
        <option value="">Select One</option>
        <option value="news">news</option>
        <option value="weather">Weather</option>
        <option value="sports">Sports</option>
    </select>
    <input type="submit" name="submit" value="CHECK">
    </form> -->

    <?php 
    if(isset($_GET['submit'])){

    
    $cat=$_GET['cat'];
    switch($cat){
        case "news":
            echo "You have selected news";
            break;
        case "weather":
            echo "You have selected weather";
            break;
        case "sports":
            echo "You have selected sports";
            break;
        default:
            echo "You have select catagory";
    }
}
    ?>
    <h1>Catagory Wise message</h1>
    <form action="">
        <select name="cat" id="">
            <option value="">Select One</option>
            <option value="news">News</option>
            <option value="weather">Weather</option>
            <option value="sports">Sports</option>
        </select>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
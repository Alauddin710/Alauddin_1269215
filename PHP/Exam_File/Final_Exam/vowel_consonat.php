<?php 
if(isset($_POST['submit'])){
$letter = $_POST['letter'];
$output=vowelCheck($letter);
echo "$output";
}

function vowelCheck($l){
    $vowel= array("A","E","I","O","U","a","i","e","o","u");
    if($l==""){
        echo "Input Your letter first";
    }elseif(in_array($l,$vowel)){
        echo "$l is a Vowel";
        return;
    }else{
        echo " $l is Consonant";
        return;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Consonant</title>
</head>
<body>
    <h4></h4>
    <form action="" method="POST">
        <input type="text" name="letter" placeholder="Enter your letter"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
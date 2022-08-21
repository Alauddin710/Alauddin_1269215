<?php 
if(isset($_POST['submit'])){
$leter = $_POST['letter'];
echo vowelCheck($leter);
}

function vowelCheck($l){
$vowel= array("A","E","I","O","U","a","e","i","o","u");

if($l==""){
    echo "Input your letter first";
    return;
}if(in_array($l, $vowel)){
    return "$l  is a vowel";
}else{
    return " $l is consonant";
}
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
    <h3>Vowel Consonant Number</h3>
    <form action="" method="POST">
        <input type="text" name="letter" placeholder="Entery your letter first"><br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>
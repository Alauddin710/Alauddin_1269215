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

if(isset($_POST['submit'])){


vowelCheck($_POST['letter']);
}
function vowelCheck($l){
    $vowel= array("a","e","i","o","u","A","E","I","O","U");
    if($l==""){
        echo " Please Enter your first letter";
    } elseif(in_array($l, $vowel)){
        echo "$l is vowel";
        return;
    }else{
        echo " $l is consonant";
    }
}
?>

<form action="" method="POST">
    <input type="text" name="letter" placeholder="Enter your leter">
    <input type="submit" name="submit" value="CHECK">
</form>

</body>
</html>
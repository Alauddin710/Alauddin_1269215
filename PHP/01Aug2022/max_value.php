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
function largest(){
    $numbers= array(20,30,40,50,70);
    $max=0;
    for ($i=0; $i<count($numbers); $i++){
        if($numbers[$i]>$max){
            $max = $numbers[$i];
        }else{
            $max= $max;
        }
       
    } return $max;
}
echo largest();
?>
</body>
</html>
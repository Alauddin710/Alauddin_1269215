

<?php 

if(isset($_POST['submit'])){


// echo "<pre>";
// print_r($_FILES);

$name= $_FILES['file']['name'];
$ext= explode(".", $name);
$ext= strtolower(end($ext));
$type= $_FILES['file']['type'];
$tmp= $_FILES['file']['tmp_name'];
$erros= $_FILES['file']['error'];
$size= $_FILES['file']['size'];

$filetypes= array("jpg","png");
$erros= array();

if($size>1024*400){
    $erros[]= "file uploas must be 400kb";
}elseif(!in_array($ext, $filetypes)){
    $erros[]= "file upload must be jpg or png";
}if(count($erros)>0){
    foreach($erros as $err){
        echo $err . "<br>";
    } echo "<br>";
}else{
    $result= move_uploaded_file($tmp, 'upload/'.$name);
    if($result==1){
        echo "File upload Successful";
    }
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
    <h3>File upload</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
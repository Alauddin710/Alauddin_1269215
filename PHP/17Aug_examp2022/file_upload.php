

<?php 

$_POST['submit'];
$_POST['file'];
// echo "<pre>";
// print_r($_FILES);
// move_uploaded_file($tmp, 'Uploads/', $name);

$name = $_FILES['file'] ['name'];
$ext= explode(".", $name);
$ext= strtolower(end($ext));
$time= time();
$newname= $time . ".". $name;
$type = $_FILES['file'] ['type'];
$tmp = $_FILES['file'] ['tmp_name'];
$errors = $_FILES['file'] ['errors'];
$size = $_FILES['file'] ['size'];

$info = getimagesize($tmp);

$filetype= array("jpg","png");
$errors = array();

if ($size>1000*100){
    $errors[]= "File must be 100kb";
}if(!in_array($ext, $filetype)){
    $errors = "File type must be jpg or png";
} 
$measure= 'width="200: height="200"';
if($measure!=$info[3]){
    $errors []= "Width and height must be 200*200";
}


if(count($errors)>0){
    foreach($errors as $err){
        echo $err . "<br>";
    } echo "<br>";
}else{
    $result = move_uploaded_file($tmp, 'Uploads/'.$name);
    if($result==1){
        echo "Upload Success full";
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
    <h1>Upload File</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"> <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
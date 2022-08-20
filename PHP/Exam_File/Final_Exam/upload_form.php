
<?php 
// echo "<pre>";
// print_r($_FILES);
// move_uploaded_file($tmp,'uploads/'.$name)
// if(isset($_POST['submit'])){
   
// $name = $_FILES['file']['name'];
// $ext= explode(".",$name);
// $ext= strtolower(end($ext));
// $type = $_FILES['file']['type'];
// $tmp  = $_FILES['file']['tmp_name'];
// $errors = $_FILES['file']['error'];
// $size = $_FILES['file']['size'];




// $filtypes = array("jpg","png");
// $errors = array();

// if($size>1024*400){
// $errors[]= "File must be upload 400kb";
// }if(!in_array($ext, $filtypes)){
// $errors[] = "File type must be jpg/png";
// }if(count($errors)>0){
//     foreach($errors as $err){
//         echo $err ."<br>";
//     }echo "<br>";
    
// }else{
//     $result= move_uploaded_file($tmp,'uploads/'.$name);
//     if($result==1){
//         echo "File upload Successful";
//     }
// }
// }


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
   

    

    <!-- <h3>File Upload</h3>
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"> <br>
    <input type="submit" name="submit" value="UPLOAD">
    </form> -->

    <h3>File upload</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"> <br>
        <input type="submit" name="submit" value="Upload"> <br>
    </form>
</body>
</html>
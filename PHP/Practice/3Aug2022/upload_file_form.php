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
        // echo "<pre>";
        // print_r($_FILES); //$_files tmp give uploaded files info
        // move_uploaded_file($tmp, 'uploads/'.$name); 

        $name = $_FILES['file']['name'];
        $ext= explode(".", $name);
        echo $ext= strtolower(end($ext));
        //$path = $_FILES['file']['full_path'];
        $tmp = $_FILES['file']['tmp_name'];
        $type = $_FILES['file']['type'];
        $errors = $_FILES['file']['error'];
        $size = $_FILES['file']['size'];

        $filetypes = array("jpg", "png");
        $errors = array();

        if($size>1024*100){
            $errors[] = "Size must be within 100kb <br>";
        }if(!in_array($ext, $filetypes)){
            $errors[] = " File type must be JPG or PNG <br>";
        } if(count($errors)>0){
            foreach($errors as $err){
                echo $err . "<br>";
            } echo "<br>";
        } else{
            $result= move_uploaded_file($tmp, 'uploads/' .$name);
            if($result==1){
                echo "Upload Successful <br>";
            }
        }
    }
?>




<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file"> <br>
<input type="submit" name="submit" value="UPLOADS">
</form>
</body>
</html>
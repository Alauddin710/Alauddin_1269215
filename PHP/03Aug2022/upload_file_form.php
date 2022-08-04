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
        $ext = explode(".", $name); //file extension anar jonno
        $ext = strtolower(end($ext));  //file extension name show koranor jonno ae 2 line e ante hbe. and (strtolower means string to lower)
        
        $type = $_FILES['file']['type'];
        $tmp = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        $size = $_FILES['file']['size'];

        $filetypes = array("jpg", "png");

        $errors = array(); //blank thakle error debe

        if($size>1024*100){
            $errors[] = "Size must be within 100KB";   //file size cheek
        }
        if(!in_array($ext, $filetypes)){
            $errors[] = "File type must be JPG or PNG"; //file types cheek
        }

        if(count($errors)>0){
            foreach($errors as $err){
                echo $err ."<br>";
            }
            echo "<br>";
        } else {
        $result = move_uploaded_file($tmp, 'uploads/'.$name);// ata holo file ta jekane upload hobe
            if($result==1){
                echo "Uploaded successfully";
            }
        }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>
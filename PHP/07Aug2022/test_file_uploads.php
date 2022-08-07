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

    // if(isset($_POST['submit'])){
    // echo "<pre>";
    // print_r($_FILES);
    $_POST['submit'];
    $name= $_FILES['file']['name'];
    $ext=explode(".", $name);
    $ext = strtolower(end($ext));
    $tmp= $_FILES['file']['tmp_name'];
    $type= $_FILES['file']['type'];
  
    $erros= $_FILES['file']['error'];
    $size= $_FILES['file']['size'];

    $filetypes= array("jpg","png");

    $erros = array();

    if($size>1024*100){
        $erros[]= "File upload must be 100kb <br>";
    }if(!in_array($ext, $filetypes)){
        $erros[] = "File upload must be Jpg or Png <br>";
    }if(count($erros)>0){
        foreach($erros as $err){
            echo $err . "<br>";
        } echo "<br>";
    } else{
        $result= move_uploaded_file($tmp, 'uploads/'. $name);
        if($result==1){
            
            echo " Uploads Successful";
            echo "<img src='uploads/$name'>";
        }
    }
// }
    ?>
    <h4>Upload File</h4>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" placeholder="Please Enter file">
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>
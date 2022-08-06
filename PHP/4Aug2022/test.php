

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
    extract($_POST);
    // $_POST['submit'];
    // $_POST['email'];
    // $_POST['name'];
    // $_POST['subject'];
    // $_POST['message'];
    $to = "mdalauddinalo710@gmail.com";

   if(mail($email,$name,$subject,$message)){
    echo "Mail Send successfully";
   }
    ?>

    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter your mail"> <br>
        <input type="text" name="name" placeholder="Enter your name"> <br>
        <input type="text" name="subject" placeholder="Enter your mail"> <br>
        <textarea name="message"></textarea>
        <input type="submit" name="submit" value="submit"> <br>
    </form>
</body>
</html>


  


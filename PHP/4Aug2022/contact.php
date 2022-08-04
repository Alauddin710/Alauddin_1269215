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
extract($_POST); //extract mane holo sob gulo aksate asbe
$to= "aloalauddin956@gmail.com";
if(mail($email, $subject, $message)){
    echo " Sent successfully";
}
?>


    <h2> Contact with Us</h2>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="Enter your email"> <br>
        <input type="text" name="name" placeholder=" Enter your name"> <br>
        <input type="text" name="subject" placeholder=" Enter your subject"> <br>
        <textarea name="message" placeholder="Enter message" ></textarea>
        <input type="submit" name="submit" value="SEND">
    </form>
</body>
</html>
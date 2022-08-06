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
extract($_POST); // extract holo somosto kiso ak sate dhore niea asbe
// $_POST['submit'];
// $_POST['email'];
// $_POST['name'];
// $_POST['message'];

$to =" mdalauddinalo710@gmail.com";
if(mail($email, $name, $subject, $message)){
echo "Message Send Successfull";
}
?>

<h3>Contact Name</h3>
<form action="" method="POST">
    <input type="text" name="email"  placeholder="Enter your email"><br>
    <input type="text" name="name"  placeholder="Enter your name"><br>
    <input type="text" name="subject"  placeholder="Enter your subject"><br>
    <input type="text" name="message"  placeholder="Enter your message"><br>
    <input type="submit" name="submit" value="SEND">
</form>
</body>
</html>


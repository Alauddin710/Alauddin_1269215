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
    validateForm();
}
    //Creating function
    function validateForm(){
        $login= $_POST['login'];
        $email= $_POST['email'];
    $validlogin = 0; // for invalid login name
    $validemail = 0; // for invalid email name
    // checking Blank Form;
    if ($login == "" && $email == "") {
        echo "<h3>please Enter your login name and email first.</h3>";
        return;
    } //check login name
    if ($login == "") {
        echo "<h3> Please Enter your login name</h3>";
    } elseif (strlen($login) > 8 || strlen($login) < 4) {
        echo "<h3> Please login name must be 4 to 8 letters</h3>";
    } else {
        $validlogin = 1; // set valid login
    }
    if ($email == "") {
        echo "<h3>Please enter your email number </h3>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Invalid Email</h3>";
    } else {
        $validemail = 1; // set valid email
    } //checking output
    if ($validlogin==1 && $validemail==1) {
        echo "Login Successful";
    }
}
    ?>

    <h1>Login Form</h1>
    <form action="" method="POST">
        <input type="text" name="login" value="<?php if(isset($_POST['login'])) echo $_POST['login']; ?>" placeholder="Enter your login name"> <br> 
        <!-- valuer modde ata babohar kora hoice searh vare ja thakbe seta stir thakar jonno -->
        <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" placeholder="Enter your email number"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>

</html>
<?php $db = new mysqli("localhost","root","","wdpf51");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
    <style>
        .green{
            background-color: 1px solid green;
            color: green;
        }
        .red{
            background-color: 1px solid red;
            color: red;
        }
    </style>
    <script>
        $(document).ready(function () {
            $("#login").click(function(){
                var em = $('#email').val();
                var pss = $('#password').val();
                $.get('check.php',{email:em,pass:pss},function(data){
                    $("#show").html(data)
                   
                })
            })
        });
    </script>
</head>
<body>
    <table border="1">
            <caption>Login Form</caption>
            <form action="">
                <tr>
                    <td>Email:</td>
                    <td><input type="text" id="email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password"></td>
                </tr>
               <tr>
                <td>&nbsp;</td>
                <td><input type="button" value="Check" id="login"></td>
               </tr>
            </form>
    </table>
    <br> 
    <div id="show"></div>
</body>
</html>
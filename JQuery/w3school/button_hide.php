<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $(":button").hide();
            })
        })
    </script>
    <p>This heading</p>
    <p>This is paragraphp</p>
    <p><a href="insert.php">insert</a></p>
    <p><a href="insert.php">Not insrt</a></p>
    <p><a href="http://" target="_blank">Blank</a></p>
    <button>Clic Here</button>
</body>
</html>
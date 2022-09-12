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
                $("ul li:first").hide();
            })
        })
    </script>
 
    <p>This second heading</p>
    <ul>
        <li>milk</li>
        <li>Tea</li>
        <li>Coffe</li>
    </ul>
    <p>This second heading</p>
    <ul>
        <li>milk</li>
        <li>Tea</li>
        <li>Coffe</li>
    </ul>
    <button>Clic Here</button>
</body>
</html>
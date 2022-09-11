<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple selector</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("h1,h2,p").css("color","blue")
            })
        })
    </script>
    <button>Clic Here</button>
    <h1>This is Heading 1 </h1>
    <h1>This is Heading 2</h1>
    <p>This is Paragraph</p>
</body>
</html>
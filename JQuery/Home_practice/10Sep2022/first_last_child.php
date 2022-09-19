<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // $("p:first-child").css("background-color","green")
            // $("li:first-child").css("background-color","yellow")

            $("p:last-child").css("background-color","green")
            $("li:last-child").css("background-color","yellow")
        });
    </script>
</head>
<body>
   <p>This 1st Paragraph</p>
   <p>This 2nd Paragraph</p>
   <div>
    <p>The div 1st paragraphp</p>
    <p>The div 2n paragraphp</p>
    <p>The div 3rd paragraphp</p>
   </div>

   <ul>
    <li>The 1st list</li>
    <li>The 2nd list</li>
    <li>The 3rd list</li>
   </ul>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple selector</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                var x = $("h1").text();
            $("h2").text("Content From:" + x);
            });
            
           
            $("#btn2").click(function(){
               var y = $("#para1").html();
                $("#content").html(y)
            })
        });

    </script>

</head>
<body>
    <button id="btn1">Do it</button>
    <h1>My Heading</h1>
    <h2></h2>
   <button id="btn2">copy and past</button>
   <p id="para1">Lorem ipsum <b>dolor sit amet, consectetur </b>adipisicing elit. Sint consequatur laborum dolore. <i>, nulla at, iusto amet quia quod </i>cupiditate similique dicta sequi deserunt quos repellat. Facilis porro optio voluptatem.</p>

   <div id="content" style="background-color: green;"></div>
</body>
</html>
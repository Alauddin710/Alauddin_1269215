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
        $(document).ready(function (){
            $(".btn1").click(function(){
                $("#para1").hide();
            })
            $(".btn2").click(function(){
                $("#para2").show();
            })
            $(".btn3").click(function(){
                $("#para3").toggle();
            })
        });
    </script>
<!-- hide,show,toggle -->
    <button class="btn1">Hide paragarph</button>
    <button class="btn2">Show paragarph</button>
    <button class="btn3">Hide and show paragarph</button>


    <p id="para1"> paragraphp: 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur omnis non illum aut quisquam aspernatur qui placeat ad tempora deleniti totam, iste numquam fugiat hic quasi nam? Ad, sint reiciendis.</p>

    <p id="para2" style="display:none;"> paragraphp: 2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur omnis non illum aut quisquam aspernatur qui placeat ad tempora deleniti totam, iste numquam fugiat hic quasi nam? Ad, sint reiciendis.</p>


    <p id="para3"> paragraphp: 3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur omnis non illum aut quisquam aspernatur qui placeat ad tempora deleniti totam, iste numquam fugiat hic quasi nam? Ad, sint reiciendis.</p>
</body>
</html>
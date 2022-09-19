<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ready function</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <script>
        $(document).ready(function(){
            $(".btn1").click(function(){
                $(".para1").hide();
            })
            $(".btn2").click(function(){
                $(".para2").show();
            })
            $(".btn3").click(function(){
                $(".para3").toggle();
            })
        })
    </script>
    <button class="btn1">Hide</button>
    <button class="btn2">Show </button>
    <button class="btn3">Show and hide</button>

    <p class="para1">This Paragraph:1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati, sint expedita fuga velit quae sequi a, fugiat molestias non itaque rem quibusdam voluptate, voluptatum nemo perspiciatis minima temporibus eos?</p>


    <p class="para2">This Paragraph:2 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, commodi ducimus repellendus et sed recusandae adipisci atque sit iste? Possimus ipsa consequuntur tenetur culpa ab ex soluta eum, fuga nisi.</p>

    <p class="para3">This Paragraph:3 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, commodi ducimus repellendus et sed recusandae adipisci atque sit iste? Possimus ipsa consequuntur tenetur culpa ab ex soluta eum, fuga nisi.</p>
</body>
</html>
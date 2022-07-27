<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Constant Check</title>
    <style>
        .empty{
            color: red;
        }
        .vowel{
            color: green;
        }
        .consonant{
            color: blue;
        }
        
    </style>
</head>
<body>
    <!-- <h1>Vowel-Constant Check</h1>
    <form action="" method="POST">
        <input type="text" name="letter" placeholder="Enter a letter">
        <input type="submit" name="submit" value="CHECK">
    </form> -->

    <?php
        // if(isset($_POST['submit'])){
        //     vowelConsonant($_POST['letter']);
        // }

        // function vowelConsonant($l){
        //     $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

        //     if($l == ""){
        //         echo "<h3 class='empty'>Please Enter a letter first!</h3>";
        //         return;
        //     }

        //     if(in_array($l, $vowels)){
        //         echo "<h3 class='vowel'>{$l} is vowel.</h3>";
        //     }
        //     else{
        //         echo "<h3 class='consonant'>{$l} is consonant.</h3>";
        //     }
        // }

        if(isset($_POST['submit']))
        vowelconsonant($_POST['letter']) ;

        function vowelconsonant($l){
            $vowels = array("a","e","i","o","u","A","E","I","O","U");
            if($l==""){
                echo "<h3 class='empty'> please Enter a letter First</h3>";
                return;
            } if(in_array($l,$vowels)){
                echo "<h3 class='vowel'> {$l} is Vowel</h3>";
            }else{
                echo "<h3 class='consonant'> {$l} is consonant</h3>";
            }
        }
    ?>

    <form action="" method="POST">
        <input type="text" name="letter" placeholder="Choose your letter">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>
<?php 
$file= "address.txt";
$datas = file($file); // file bultin function ta  kono file k array akare dekai abong file dara kono file access kore
// echo "<pre>";
// print_r($datas);


foreach($datas as $data){
    list ($name, $email) = explode(" ", $data);
    echo "<a href=\" $email\"> $name</a> <br>";
}

?>
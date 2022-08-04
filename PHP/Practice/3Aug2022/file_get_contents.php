<?php 
$data= file_get_contents("article.txt");// 
echo $data; //file_get_contents file take string akare neache tae print_r e kono array paoa jae nae..full content eseche
$contents= explode("\n", $data); // explode kono file k khondo khondo akare vag kore niea ase
foreach($contents as $line){
    echo $line . "<br>";
}
?>
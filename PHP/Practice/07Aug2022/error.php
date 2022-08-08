<?php 
fopen('file.txt', 'r');
$erros = error_get_last();
print_r($erros);
?>
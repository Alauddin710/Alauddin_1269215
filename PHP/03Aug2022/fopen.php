<?php 
$file = "mytextfile.txt";
$fh= fopen($file, "r"); // r means read kora. akane r mane holo sudo mytext.txt file pora jabe. fopen dara file open hoie pora jabe

while (!feof($fh)){
    echo fgets($fh). "<br>"; // fgets mane holo file  ak line, ak line kora poara print korbe. !feof joto khon na sesh hoi totokhon print hobe

    //function run er madhome poro file ka open kore line by line read kora hocce, aekhane (!feof) hoacce file er end porjonto jaoa
}
fclose($fh); // akanae fclose dara file pora sehs hobe. fclose na dile pora sesh hobe na. browser cholte cholte  hang hoie jabe.
//feof function dea je file open kora hoache read er jonno ta close korar jonno fclose used hoe. 

?>
<hr>
<?php

$file = "mytextfile.txt";
$fh= file($file);
print_r($fh);
?>
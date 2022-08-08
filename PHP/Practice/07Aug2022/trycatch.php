<?php 
try{
    $fh= fopen("contacts.txt", "r");
    if(!$fh){
        throw new Exception("Could not open the file");
    }
} catch(Exception $abc){
    echo "Error (File:" .$abc->getfile(). "<br>, line".
    $abc->getLine(). "<br>): ". $abc->getMessage();
    // echo $abc->getLine();
    // echo "<br>";
    // echo $abc->getFile();
    // echo "<br>";
    // echo $abc->getMessage();
}
// try catch dara error gulo dhora jai konjaigai vul hoice
?>

<?php 
    // try {
    //     echo $fh = require("contact.php");
    //     if (! $fh) {
    //         throw new Exception("Could not open the file!");
    //     }
    //    } catch (Exception $abc) {
    //     // echo "Error (File: ".$e->getFile()."<br>, line ".
    //     // $e->getLine()."<br>): ".$e->getMessage();

    //     echo $abc->getMessage();
    //    }

    //    echo "Hello. This is shows that PHP working fine after fatal error";

?>
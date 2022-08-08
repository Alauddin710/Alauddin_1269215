<?php 
//date_default_timezone_set("Asia/Bangkok");
ini_set("date.timezone", "Asia/Singapore");

echo "<br>";
echo date_default_timezone_get(); //ata dara janajabe php default akare jeta deoa thakbe
echo "<br>";
echo date("d-m-y h:i:s, a");  // ata daro default akare jeta daoa thakebe se time ta jana thakbe php config theke ai date ta set korte hoi

?>
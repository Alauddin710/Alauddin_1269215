<h1>$_SERVER SUPERGLOBAL</h1>


<?php 
echo "<pre>";
// print_r($_SERVER);
// echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
?>
<h1> $_GET SUPERGLOBAL</h1>
<a href="superglobal.php?name=alo&phone=01743612710&age=22">click here</a>
<?php 
echo $_GET['name'];
echo "<br>";
echo $_GET['age'];
echo "<br>";
echo $_GET['phone'];
$_GET['Today']="Monday";
print_r($_GET);
?>
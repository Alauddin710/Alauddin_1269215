<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $total = "$id". " $name ". "$email"." $phone";

    $data = fopen("text.txt","a");
    fwrite($data, $total. "\n");

    fclose($data);
}
?>


<h1>Students Fom</h1>

<form action="" method="post">
ID:<input type="text" name="id" placeholder="Enter your id name"> <br>
Name:<input type="text" name="name" placeholder="Enter your name"> <br>
Email: <input type="email" name="email" placeholder="Enter your email name"> <br>
<input type="text" name="phone" placeholder="Enter your phone"> <br>
<input type="submit" name="submit" value="Upload">

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>;
  
<?php 

$file1 = file("text.txt");
foreach($file1 as $file){
list($id,$name,$email,$phone) = explode(" ",$file);
echo "<tr>
<td>$id</td>
<td>$name</td>
<td>$email</td>
<td>$phone</td>
</tr>";
}

?>
</table>
</form>
</body>
</html>
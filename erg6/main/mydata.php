<?php 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "personal"; 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
if (!$conn) { 
die("Connection failed: " . mysqli_connect_error()); 
} 

mysqli_set_charset($conn, "utf8"); 

$sql = "INSERT INTO `bash`(`title`, `name`, `lastname`, `birthdate`, `country`, `oik`, `address`, `city`, 
`perioxh`,`tax`,`phone`,`email`,`username`,`password`) 
VALUES 
('{$_POST['title']}','{$_POST['name']}','{$_POST['lastname']}','{$_POST['birthdate']}','{$_POST['country']}','{$_POST['oik']}',
'{$_POST['address']}', '{$_POST['city']}','{$_POST['perioxh']}','{$_POST['tax']}','{$_POST['phone']}',
'{$_POST['email']}','{$_POST['username']}','{$_POST['password']}');"; 

$result = mysqli_query($conn, $sql); 

echo file_get_contents('index.html');

mysqli_close($conn); 
?> 
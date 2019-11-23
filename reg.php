
<?php
$username=$_POST['username'];

$password= $_POST['password'];

$hash= md5 ($password);

$Designation= $_POST['Designation'];

$Email_id=$_POST['Email_id'];

 $servername = "localhost"; 
 $username = "root"; 
 $password = ""; 
 $db="login";

try {
    $db= new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



	if($_POST['submit']) {

   
	 $sql = "INSERT INTO users (username, password, Email_id,Designation) VALUES ('".$_POST["username"]."','$hash', '".$_POST["Email_id"]."', '".$_POST["Designation"]."')";
     $db->query($sql);
	require('index.php');
} 
 
}
catch (PDOException $e)
 {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
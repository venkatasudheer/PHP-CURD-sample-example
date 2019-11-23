<?php

 $servername = "localhost"; 
 $username = "root"; 
 
 $password = ""; 
 $db="login";

try {
    $db= new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



	if (isset($_POST['submit'])) {
		
		$Email_id=$_POST['Email_id'];
		$username=$_POST['username'];
		$Designation=$_POST['Designation'];
		$id = $_POST['id'];
		
	$sql1 = "UPDATE users SET username='".$_POST["username"]."', Designation='".$_POST["Designation"]."',Email_id='".$_POST["Email_id"]."' WHERE id='$id'";
		$query = $db-> prepare ($sql1);
		$query-> execute(array($id));
		
		echo "<script> alert ('congrats your changes has been changed')</script>";
		require('adduser.php');
} 
	
}
catch (PDOException $e)
 {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
<?php 
include('config.php');


if (isset ($_POST['submit'])) {

	$token=$_POST['token'];
	$newpassword= md5 ($_POST['newpassword']);
	$conpassword= md5 ($_POST['conpassword']);

 $sql="SELECT * FROM users WHERE token='$token' ";
		$query = $db->prepare($sql);
		$query->execute(array($token));

		if ($newpassword !== $conpassword){
			
			echo "passwords does not match";
			require ('resset.php');
		}
			
		if ($newpassword == $conpassword) {
		
		$sql="UPDATE `users` SET `password`='$newpassword' WHERE token='$token'";
		$query = $db->prepare($sql);
		$query->execute(array($token));
		
		echo "<script> alert ('congrats your password has been changed')</script>";
		require('index.html');
		 
		}
		
	
}


?>

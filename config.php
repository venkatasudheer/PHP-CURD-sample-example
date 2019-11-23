<?php

	
	
 $servername = "localhost"; 
 $username = "root"; 
 $password = ""; 
 $db="login";

try {
    $db= new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
 {
    echo 'Connection failed: ' . $e->getMessage();
}
	
?>
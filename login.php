
<?php
include "config.php";

session_start();

if (isset ($_POST['submit'])) {

$username=$_POST['username'];

$password= md5($_POST['password']);

$Designation=$_POST['Designation'];

$q = 'SELECT * FROM users WHERE username=:username AND password=:password AND Designation=:Designation';
 $query = $db->prepare($q);
  $query->execute(array(':username' => $username, ':password' => $password, ':Designation' => $Designation));
  $row = $query->fetch(PDO::FETCH_ASSOC);

  $SESSION['id']=$row['id'];
  $_SESSION['username'] = $row['username'];
   $_SESSION['password'] = $row['password'];
   $_SESSION['Designation']=$row['Designation'];


 if ($_SESSION['Designation']=="Admin")
{
	echo "<script> window.open('admin.php' , '_self')</script>";
}
elseif ($_SESSION['Designation']=="operation Team")
{
	echo "<script> window.open('operation.php', '_self')</script>";
}
elseif ($_SESSION['Designation']=="Account Manager")
{
	echo "<script> window.open('account.php' ,'_self')</script>";
}
elseif ($_SESSION['Designation']=="Team Member")
{
	echo "<script> window.open('Team.php' , '_self')</script>";
}
else 
{
echo "<script> alert ('Sorry you are not allowed to login')</script>";
	require('index.html');
}
}

?>

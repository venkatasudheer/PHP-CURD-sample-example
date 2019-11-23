<?php
include('config.php');
if (isset($_GET['delete']));
{
$id=$_GET['delete'];

$sql = "DELETE FROM users  WHERE id='$id'";

   $db->query($sql);
}
	require('adduser.php');
?>               

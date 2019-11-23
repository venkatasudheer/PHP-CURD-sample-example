<?php
include('config.php');
$edit=$_GET['key'];

$sql= "SELECT * FROM users WHERE id='$edit'";
$query= $db-> prepare($sql);
$query->execute(array($sql));
$row = $query->fetch(PDO::FETCH_ASSOC);

		
$username=$row['username'];
$Email_id=$row['Email_id'];
$Designation=$row['Designation'];
	
?>
<html>
<head>
<title> Edit User </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
h2 {
	text-align:center;
	padding:30px;
}

</style>
<form action="edit.php" method="post">
<h2> Edit Employee </h2> 
<div class="container">
<div class="row">
<div class="col-6">
  	<input type="hidden" class="form-control" name="id" value="<?php echo  $edit; ?>" autocomplete="off" readonly> <br>
	username: <input type="text" class="form-control" onfocus="this.value=''" name="username" value="<?php echo  $username; ?>" autocomplete="off" required> <br>
	Email id : <input type="email" class="form-control"onfocus="this.value=''" name="Email_id" value="<?php echo  $Email_id; ?>" autocomplete="off" required> <br>
	Designation: <?php echo $Designation;?>
	<div class="dropdown" >
    <label> Designation : <label> <br>
    <select name="Designation">
    <option type='dropdown' value="Admin"> Admin </option>
    <option type='dropdown' value="Account Manager"> Account Manager</option>
    <option type='dropdown'  value="operation Team"> operation Team</option>
	<option type='dropdown'  value="Team Member"> Team Member</option>
    </select>
    </div><br>
	<button type="submit" name="submit" class="btn btn-primary btn-block" > Edit </button>
	</form>
</div>
</div>
</div>
</body>
</html>
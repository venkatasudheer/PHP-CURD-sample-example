<?php
$email=$_GET['key'];
?>
<html>
<head>
<title> Reset password </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
h2 {
	text-align:center;
	padding:20px;
}

</style>
</head>
<body>

<h2> Reset password </h2>
<form method="post" action="ressetvad.php">
<div class="container">
<div class="row">
<div class="col-6">
<input type="hidden" name="email" class="form-control" value="<?php echo $email;?>" readonly>
New Password: <input type="password" class="form-control" placeholder="password" name="newpassword" autocomplete="off" required> <br>
Confirm password: <input type="password" class="form-control" placeholder="password" name="conpassword" autocomplete="off" required> <br>
<input type="hidden" name="token" value="<?php echo $email;?>"> 
<button class="btn btn-default" type="submit" name="submit"> submit </button>

</div>
</div>
</div>
</form>
</body>
</html>

<! DOCTYPE HTML>
<html>
<head>

<title> Software </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link href="style.css" rel="stylesheet">
</head>
<body>
<form action="login.php" method="POST">
<div class="container">
<div class="row">
<div class="col-6">
<h2> Login </h2> <br>

username: <input type="text" placeholder="username" class="form-control" name="username" autocomplete="off"required> <br> <br>
password: <input type="password" placeholder="password"	class="form-control"name="password" required> <br> <br>
<div class="dropdown">
								<label> Designation : </label> <br>
					  			<select name="Designation">
								<option type='dropdown' value="Admin"> Admin </option>
								<option type='dropdown' value="Account Manager"> Account Manager</option>
								<option type='dropdown'  value="operation Team"> operation Team</option>
								<option type='dropdown'  value="Team Member"> Team Member</option>
					  			</select>
					    	    </div>
<br> 
<button class="btn btn-primary" type="submit" name="submit"> submit </button> &nbsp; <a href="forgot.php"> Forgot password? </a>

</div>
</div>
</div>
</form>
</body>
</html>
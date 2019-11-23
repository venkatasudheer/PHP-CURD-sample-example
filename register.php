<html>
<head>
<title> Add User </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<h2 class="container"> Register </h2>
<form action="reg.php" method="post" id="1">
<div class="container">
<div class="row">
<div class="col-6">

								Email id: <input type="email" class="form-control" name="Email_id" autocomplete="off" required>
								username: <input type="text" class="form-control"  name="username" autocomplete="off" required>
								password: <input type="password" class="form-control" name="password" autocomplete="off" required>
								<div class="dropdown">
								<label> Designation : </label> <br>
					  			<select name="Designation">
								<option type='dropdown' value="Admin"> Admin </option>
								<option type='dropdown' value="Account Manager"> Account Manager</option>
								<option type='dropdown'  value="operation Team"> operation Team</option>
								<option type='dropdown'  value="Team Member"> Team Member</option>
					  			</select>
					    	    </div>
                    <br />
						<button class="btn btn-success" type="submit" name="submit">Register</button>

</div> 
</div>
</form>
</body>
</html>
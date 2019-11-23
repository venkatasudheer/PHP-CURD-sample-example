<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<title> Forgot Password </title>
</head>
<body>
<form action="reset.php" method="POST">
<h2> Forgot Password </h2> <br> <br>
Enter your Email Id : <input type="Email" placeholder="Email" name="email" id="forgot" autocomplete="off" required>
<input type="hidden" name="token" >
<button class="btn btn-default"  type="submit" name="submit">Next </button>
</form>
</body>
</html>

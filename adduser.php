<html>
<head>
<title> Add User </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
h2 {
	text-align:center;
	padding:30px;
}
body{
	counter-reset: Count-Value; 
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr td:first-child:before
{
  counter-increment: Count-Value;   
  content:counter(Count-Value);
}

th {
    border: 1px solid #dddddd;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;

}
.modal {
  display: none;
  position : fixed;
  z-index: 1;
  padding-top: 100px;
  left: 350px;
  top: 0;
  width: 50%; 
  height: 100%; 
  overflow: auto;
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}
</style>
</head>
<body>
<h2> Employees List </h2>
<form action="adddb.php" method="post" id="1">
<div class="container">
<div class="row">
<div class="col-lg-8">
<input type="text" name="search" class="form-control" placeholder="search....." id="searchbox" autocomplete="off">
</div> 
<div class="col">
<button class="btn btn-default"  name="Admin" onclick="window.location.href='Admin.php'" value="Admin"> Go back </button>
<button class="btn btn-success"  id="new" data-toggle="modal" onclick="document.getElementById('Modal').style.display='block'" name="new" value="new"> New</button>
<a href="logout.php"> Logout</a>
	<div id="Modal" class="modal">
		<div class="modal-content">
				<div class="modal-header">
					<h2> Add Employee </h2> 
					<span class="close" id="close" data-dimiss="modal" onclick="document.getElementById('Modal').style.display='none'" aria-hidden="true">&times;</span> 				
				</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
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
						    </div>
						</div>

						<div class="modal-footer">
						<button class="btn btn-success " type="submit" name="submit"  value="Add"> <i class="fa fa-plus"></i> Add </button>
						 <button type="button" class="btn btn-default" onclick="document.getElementById('Modal').style.display='none'" data-dismiss="modal">Close</button>
						</div>
					</div>
		</div> 
	</div>
</div> 
<br> <br>
<table  id="table">
	<thead style=" text-align: center;">
		 <tr> 
		 <th> S.No </th>
		 <th> username </th>
		 <th> Email </th>
		 <th> Designation </th>
		 <th> Action </th>
		 </tr>
	</thead>
<?php
include ('config.php');

$sql = $db -> query( "SELECT id , username , Email_id , Designation FROM users");


	while($row = $sql->fetch()){
?>
			<tbody>
			<tr>
			<td> </td>
			<td style="display:none"><?php echo  $row["id"]; ?> </td>
			<td><?php echo  $row["username"]; ?></td>
			<td><?php echo  $row["Email_id"]; ?></td>
			<td><?php echo  $row["Designation"]; ?></td> 
			<td> 
				<center>
			<button class="btn btn-primary "type="submit" name="select" onclick="window.location.href='editform.php?key=<?php echo  $row["id"]; ?>'" value="Edit" ><i class="fa fa-pencil"></i> Edit </button>
			<button  class="btn btn-danger " onclick=" window.location.href='delete.php?delete=<?php echo  $row["id"]; ?>'" type="submit" name="delete" value="delete" ><i class="fa fa-trash"></i> Delete </button> 
			 	</center>
			</td>
			</tr>

			<?php 
			}
			?>

			</tbody>
</table>
</div>
</form>
<script>
// search js 
  $("#searchbox").keyup(function() {
    var value = $(this).val();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().indexOf(value) >-1)
    });
  });

</script>
</body>
</html>
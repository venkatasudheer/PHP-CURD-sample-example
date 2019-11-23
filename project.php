<html>
<head>
<title> Project </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
	h2 {
		text-align:center;
	}
body{
	counter-reset: Count-Value; 
}
	
table , th , td {

	border : 2px solid black ;
	border-collapse : collapse;
}

th , td {

text-align : center;

}
tr td:first-child:before
{
  counter-increment: Count-Value;   
  content:counter(Count-Value);
}

	</style>
</head>
<body>
 <h2>project Reqirements </h2> 
 <div class= "container">
 <table width='50%' class="table table-striped">
 <thead>
 <tr> 
 <th>SNo</th>
 <th> Name of the project </th>
 <th> Requriement</th>
 <th> status </th>
 <th> Priority</th>
 <th> Actions </th>
  </tr>
  </thead>
<?php
include ('config.php');

$sql = $db -> query( "SELECT id , Name_of_the_project , Requirements , status , Priority FROM project");


	while($row = $sql->fetch()){
?>
			<tbody id="table">
			<tr>
			<td> </td>
			<td style="display: none;"><?php echo  $row["id"]; ?> </td>
			<td><?php echo  $row["Name_of_the_project"]; ?></td>
			<td><?php echo  $row["Requirements"]; ?></td>
			<td><?php echo  $row["status"]; ?></td>
			<td><?php echo  $row["Priority"]; ?></td> 
			<td> 
				<center>
			<button class="btn btn-primary "type="submit" name="select" onclick="window.location.href='#.php?key=<?php echo  $row["id"]; ?>'" value="Edit" ><i class="fa fa-pencil"></i> Edit </button>
			<button  class="btn btn-danger " onclick=" window.location.href='#.php?delete=<?php echo  $row["id"]; ?>'" type="submit" name="delete" value="delete" ><i class="fa fa-trash"></i> Delete </button> 
			 	</center>
			</td>
			</tr>

			<?php 
			}
			?>

			</tbody>
</table>
 </div>

 </body>
</html>
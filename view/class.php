<?php
	//session starts
session_start();
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}else {
	header("location:index.php");
}
	//session ends
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Class Page</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<select>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
		<option value="Class-C">Class-C</option>
		<option value="Class-D">Class-D</option>
	</select>
	<table border="1">
		<tr>
			<th>#SI</th>
			<th>Name</th>
			<th>Id</th>
			<th>Section</th>
			<th>Age</th>
			<th>Email</th>
			<th>Gender</th>
			<th>phone</th>
			<th>Grade</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>Jill</td>
			<td>Smith</td>
			<td>50</td>
			<td>50</td>
			<td>50</td>
			<td>50</td>
			<td>50</td>
			<td>50</td>
			<td><input type="text" name="mark" placeholder="mark ex.100"></td>
			<td>
				<button>Delete</button>

			</td>
		</tr>
		<tr>
			<td>Jill</td>
			<td>Smith</td>
			<td>50</td>
			<td>50</td>
			<td>50</td>
			<td>50</td>
			<td>50</td>
			<td>50</td>
			<td><input type="text" name="mark" placeholder="mark ex.100"></td>
			<td>
				<button>Delete</button>

			</td>
		</tr>
	</table> 
</body>
</html>
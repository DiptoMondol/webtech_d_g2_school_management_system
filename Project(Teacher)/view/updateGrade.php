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
	
	<title>Update Grade</title>
	
</head>
<body>
	<select>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
		<option value="Class-C">Class-C</option>
		<option value="Class-D">Class-D</option>
	</select>
	<table border="1" cellspacing="0">
		<tr>
			<th>#SI</th>
			<th>Name</th>
			<th>Id</th>
			<th>Grade</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Dipto</td>
			<td>17-34833-2</td>
			<th>A+</th>
			<td>
				<button>Update</button>

			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Reza</td>
			<td>17-34833-2</td>
			<th>A+</th>
			<td>
				<button>Update</button>

			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Bijay</td>
			<td>17-34833-2</td>
			<th>B+</th>
			<td>
				<button>Update</button>

			</td>
		</tr>
		
			
	</table> 
</body>
</html>
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
	
	<title>Attendance</title>
	
</head>
<body>
	<select>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
		<option value="Class-C">Class-C</option>
		<option value="Class-D">Class-D</option>
	</select>
	<select>
		<option value="date">Date</option>
		
	</select>
	<table border="1" cellspacing="0">
		<tr>
			<th>#SI</th>
			<th>Name</th>
			<th>Id</th>
			<th>Email</th>
			<th>phone</th>
			<th>present</th>
			<th>Absent</th>

		</tr>
		<tr>
			<td>1</td>
			<td>Dipto</td>
			<td>17-34833-2</td>
			<td>dipto@gmail.com</td>
			<td>01734103280</td>
			<td>P</td>
			<td></td>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Reza</td>
			<td>17-34561-2</td>
			<td>reza@gmail.com</td>
			<td>01734103280</td>
			<td></td>
			<td>A</td>
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Mumu</td>
			<td>17-34631-2</td>
			<td>mumu@gmail.com</td>
			<td>01732514161</td>
			<td>P</td>
			<td></td>
			</td>
		</tr>
	</table> 
</body>
</html>
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
	<title>Class Schedule</title>
</head>
<body>
	<table border="1" cellspacing="0">
		<tr>
			<th>Course</th>
			<th>Day</th>
			<th>Time</th>
			<th>Section</th>
			
		</tr>
		<tr>
			<td>Bangla</td>
			<td>Sunday-Tuesday</td>
			<td>9-11</td>
			<td>A</td>
			
			</td>
		</tr>
		<tr>
			<td>Bangla</td>
			<td>Monday-Wednessday</td>
			<td>11-2</td>
			<td>B</td>
			
			</td>
		</tr>
		

			
	</table>

</body>
</html>


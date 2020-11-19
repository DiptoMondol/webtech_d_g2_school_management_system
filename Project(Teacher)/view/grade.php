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
	
	<title>Class Page</title>
	
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
			<th>Section</th>
			<th>80-100(A+)</th>
			<th>70-79(A)</th>
			<th>60-69(A-)</th>
			<th>50-59(B)</th>
			
			<th>Action</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Dipto</td>
			<td>17-34833-2</td>
			<th>A</th>
			<th>81</th>
			<th></th>
			<th></th>
			<th></th>
			<td>
				<button>Delete</button>

			</td>
		</tr>
		
			
	</table> 
</body>
</html>
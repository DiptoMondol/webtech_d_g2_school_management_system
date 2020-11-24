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
	
	<table width="800px" border="1" align="center">
		 <?php include 'header.php';?>
    <td>
    	<center>
    	<select>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
		<option value="Class-C">Class-C</option>
		<option value="Class-D">Class-D</option>
	   </select>
	   </center>
	<table border="1"  cellspacing="0" align="center">
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
			<td>17-34833</td>
			<th>A+</th>
			<td>
				<button>Update</button>

			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Reza</td>
			<td>17-34539-2</td>
			<th>A+</th>
			<td>
				<button>Update</button>

			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Bijay</td>
			<td>17-34634-2</td>
			<th>B+</th>
			<td>
				<button>Update</button>

			</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Foyaz</td>
			<td>17-34643-2</td>
			<th>B+</th>
			<td>
				<button>Update</button>

			</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Alimul</td>
			<td>17-34653-2</td>
			<th>B+</th>
			<td>
				<button>Update</button>

			</td>
		</tr>
		
			
	 </table> 
  </td>
 </table> 
</body>
</html>
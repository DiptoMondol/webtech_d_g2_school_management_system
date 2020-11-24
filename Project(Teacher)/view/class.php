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
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
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
			<th>Age</th>
			<th>Email</th>
			<th>Parent Email</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>Grade</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Dipto</td>
			<td>17-34833-2</td>
			<td>A</td>
			<td>23</td>
			<td>dipto@gmail.com</td>
			<td>samapti@gmail.com</td>
			<td>Male</td>
			<td>01734103280</td>
			<td><input type="text" name="mark" placeholder="mark ex.100"></td>
			<td>
				<button>Delete</button>

			</td>
		</tr>
		<tr>
			<td>2</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="text" name="mark" placeholder="mark ex.100"></td>
			<td>
				<button>Delete</button>

			</td>
		</tr>
		<tr>
			<td>3</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="text" name="mark" placeholder="mark ex.100"></td>
			<td>
				<button>Delete</button>

			</td>
		</tr>
		<tr>
			<td>4</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="text" name="mark" placeholder="mark ex.100"></td>
			<td>
				<button>Delete</button>

			</td>
		</tr>
	</table>
  </td>
  </table>
</body>
</html>
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
	<table width="800px" border="1" align="center">
		 <?php include 'header.php';?>
    <td>
    <center>
	<title>Contact with Parent</title>
	
</head>
<body>
	<center>
	<select>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
		<option value="Class-C">Class-C</option>
		<option value="Class-D">Class-D</option>
	</select>
	
	<table border="1" cellspacing="0">
		<tr>
			
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			

		</tr>
		<tr>
			<td>Samapti Rani</td>
			<td>samapti@gmail.com</td>
			<td>01734103280</td>
			
		</tr>
		<tr>
			<td>Moklesur Rahman</td>
			<td>moklesur@gmail.com</td>
			<td>01734103546</td>
			
		</tr>
		<tr>
			<td>Razzak Ahmed</td>
			<td>raz@gmail.com</td>
			<td>01756103295</td>
			
		</tr>
		<tr>
			<td>Hasibul haque</td>
			<td>hasibi@gmail.com</td>
			<td>01734103756</td>
			
		</tr>
		<tr>
			<td>sumit sarkar</td>
			<td>sumit@gmail.com</td>
			<td>01734103925</td>
			
		</tr>
	</center>
   </center>
  </td>
 </table>
</body>
</html>
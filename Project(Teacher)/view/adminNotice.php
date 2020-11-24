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
	
	<title>Admin Notice</title>
	
</head>
<body>
	<table width="900px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
	<center>
		<h1>Admin Notice</h1>
		<form method="" align = "center">
			<center>
			<table border="1" cellspacing="0" width="500px" height="300px">
				
				
					
					<tr>
						<td >There is no new notice</td>
					</tr>
				
			
			</table>
		</center>
			</form>			
			
		</form>
	</center>
</td>
</table>
</body>
</html>
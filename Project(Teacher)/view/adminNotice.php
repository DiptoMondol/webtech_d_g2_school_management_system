<?php
	//session starts
session_start();
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}else {
	header("location:index.php");
}
include ('../model/db.php');
$connection = new db();
$conobj=$connection->OpenCon();
global $result;

$sql = "SELECT * FROM adminnotice";
$result = $conobj->query($sql);
	

$connection->CloseCon($conobj); 
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
			<tbody>    
			
				<?php
				
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
					echo "<tr>";
					echo "<td>$row[notice]</td>" ;
					echo "</tr>";
			
							}
			
							}
				 
				?>
			
		</tbody>
			</table>
		</center>
			</form>			
			
		</form>
	</center>
</td>
</table>
</body>
</html>
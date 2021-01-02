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
	<link rel="stylesheet" href="../assets/css/teacherdesign.css" />
	
</head>
<body>
	<table class="teacherhome_design" width="100%" border="1" align="center">
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
			
		
	</center>
</td>
<tr>
					<td class="footer_design" colspan="2" align="center" height="30px;"><h3>“Give me an educated mother, I shall promise you the birth of a civilized, educated nation.”<br>
— Napoleon</h3></td>
					
			</tr>
</form>


</table>

</body>
</html>
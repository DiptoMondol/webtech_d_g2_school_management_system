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

	$sql = "SELECT * FROM grade";
	$result = $conobj->query($sql);
	

	$connection->CloseCon($conobj); 

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Class Page</title>
	<link rel="stylesheet" href="../assets/css/teacherdesign.css" />
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table class="teacherhome_design" width="100%" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
    <center>
	<table class="subtable" border=1 cellspacing="0" width="500px">
		<h2>Student Grade Information</h2>
	   <thead id="table_head">
			<th>#SI</th>
			<th>Name</th>
			<th>Id</th>
			<th>Grade</th>
			<th>Action</th>
			
		</thead>
		 <tbody>    
			
				<?php
				
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			 echo "<tr>";
			echo "<td>$row[serial]</td> 
			      <td>$row[name]</td>
			      <td>$row[id]</td>
			      <td>$row[grade]</td>
				  <td><button id=button><a href=../php/gradeDeleteCheck.php?id=$row[id]>Delete</a></button></td>";
			echo "</tr>";
			
	        }
			
		        }
				 
				?>
			
		</tbody>
		
	</table>
	</center>
  </td>
  <tr>
					<td class="footer_design" colspan="2" align="center" height="30px;"><h3>“Give me an educated mother, I shall promise you the birth of a civilized, educated nation.”<br>
— Napoleon</h3></td>
					
			</tr>
  </table>
  </form>
</body>
</html>


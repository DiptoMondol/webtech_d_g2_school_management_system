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

	$sql = "SELECT * FROM salary";
	$result = $conobj->query($sql);
	

	$connection->CloseCon($conobj); 

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Salary History Page</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
    
	<table border=1 cellspacing="0">
	    <thead>
			<th>Year</th>
			<th>Month</th>
			<th>Salary</th>
			<th>Withdraw</th>
		</thead>
		 <tbody>    
			
				<?php
				
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			 echo "<tr>";
			echo "<td>$row[year]</td> 
			      <td>$row[month]</td>
			      <td>$row[salary]</td>
			      <td>$row[withdraw]</td>";
				  
			echo "</tr>";
			
	        }
			
		        }
				 
				?>
			
		</tbody>
	</table>
  </td>
  </table>
  </form>
</body>
</html>


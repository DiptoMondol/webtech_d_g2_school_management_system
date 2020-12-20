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





		

	$sql = "SELECT * FROM classschedule";
	$result = $conobj->query($sql);
	

	$connection->CloseCon($conobj); 

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Class Page</title>
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
    
	<table border=1 cellspacing="0">
	    <thead>
			<th>Course</th>
			<th>Day</th>
			<th>Time</th>
			<th>Section</th>
			
		</thead>
		 <tbody>    
			
				<?php
				
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			 echo "<tr>";
			echo "<td>$row[course]</td> 
			      <td>$row[day]</td>
			      <td>$row[time]</td>
			      <td>$row[section]</td>";
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


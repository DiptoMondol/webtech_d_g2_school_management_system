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





		

	$sql = "SELECT * FROM paymentdetails";
	$result = $conobj->query($sql);
	

	$connection->CloseCon($conobj); 

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Payment Details</title>
	<link rel="stylesheet" href="../assets/css/teacherdesign.css" />
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table class="teacherhome_design" width="100%" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
    <center>
	<h2 align="center">Payment Details</h2>
	<table border=1  width ="400px" cellspacing="0">
	    <thead id="table_headgrade">
			<th>Date</th>
			<th>Amount Received</th>
			
		</thead>
		 <tbody>    
			
				<?php
				
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			 echo "<tr>";
			echo "<td>$row[date]</td> 
			      <td>$row[amountreceived]</td>";
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


<?php
global $id;	
global $select;
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





if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$select =  $_POST['select'];
	
	if($select == "Class-A"){
		

	$sql = "SELECT * FROM contactparentb";
	$result = $conobj->query($sql);
	}

	else {


	$sql = "SELECT * FROM contactparent";
	$result = $conobj->query($sql);

	}	
	
	$connection->CloseCon($conobj); 
}
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
	<h2 align="center">Contact With Parent</h2>
	<input type ="submit" value ="Submit">
	<select name="select" id="dropdown">
		<option value="select-class">select-class</option>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
	</select>
    
	<table border=1 cellspacing="0">
	    <thead id="table_headgrade">
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			
		</thead>
		 <tbody>    
			
				<?php
				 if($select == "Class-A" || $select == "Class-B"){
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			 echo "<tr>";
			echo "<td>$row[name]</td> 
			      <td>$row[email]</td>
			      <td>$row[phone]</td>";
			      
			echo "</tr>";
			
	        }
			
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
<?php
global $id;	
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


global $select;

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
	
</head>
<body>
	<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
	<input type ="submit" value ="Submit">
	<select name="select">
		<option value="select-class">select-class</option>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
	</select>
    
	<table border=1 cellspacing="0">
	    <thead>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>
		</thead>
		 <tbody>    
			
				<?php
				 if($select == "Class-A" || $select == "Class-B"){
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			 echo "<tr>";
			echo "<td>$row[name]</td> 
			      <td>$row[email]</td>
			      <td>$row[phone]</td>
			      <td><a href=../php/deleteParentInfoCheck.php?id=$row[name]>Delete</a><br></td>";
			echo "</tr>";
			
	        }
			
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
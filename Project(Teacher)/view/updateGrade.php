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


global $select;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$select =  $_POST['select'];
	
	if($select == "Class-A"){
		

	$sql = "SELECT * FROM updategrade";
	$result = $conobj->query($sql);
	}

	else {


	$sql = "SELECT * FROM updategradeb";
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
			<th>#SI</th>
			<th>Name</th>
			<th>Id</th>
			<th>Grade</th>
			<th>Action</th>
		</thead>
		 <tbody>    
			
				<?php
				 if($select == "Class-A" || $select == "Class-B"){
					if ($result->num_rows > 0) {
		
		        while($row = $result->fetch_assoc()) {
			  
			 echo "<tr>";
			echo "<td>$row[serial]</td> 
			      <td>$row[name]</td>
			      <td>$row[id]</td>
			      <td>$row[grade]</td>
			      <td><a href=changeGrade.php?id=$row[id]>Update</a><br></td>";
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
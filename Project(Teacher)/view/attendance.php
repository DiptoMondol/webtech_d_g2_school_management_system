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
		

	$sql = "SELECT * FROM attendance";
	$result = $conobj->query($sql);
	}

	else {


	$sql = "SELECT * FROM  attendanceb";
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
		<select>
		<option value="date">Date</option>
		<option value="date">1/1/2021</option>
		<option value="date">2/1/2021</option>
		
		
	</select>
    
	<table border=1 cellspacing="0">
	    <thead>
			<th>Serial</th>
			<th>Name</th>
			<th>Id</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Present</th>
			<th>Absent</th>
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
				  <td>$row[email]</td>
			      <td>$row[phone]</td>
			      <td>$row[present]<br></td>
			      <td>$row[absent]<br></td>
			      <td><a href=../model/deleteReaderInfoCheck.php?id=$row[id]>Edit</a><br></td>";
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



<?php
$id = $_GET["id"];

include('../model/db.php');
$connection = new db();
$conobj=$connection->OpenCon();

$sql = db::checkGrade($conobj,$id);

$row = mysqli_fetch_array($sql);
include('../php/updateGradeCheck.php');
?>


<form action="" method="post">
<table>
<tr>
	<td>Serial</td>
	<td><input type="text" name="serial" value="<?php echo $row['serial'];?>"/></td>
</tr>
<tr>
	<td>Name</td>
	<td><input type="text" name="name" value="<?php echo $row['name'];?>"/></td>
</tr>
<tr>		
	<td>Id</td>
	<td><input type="text" name="id" value="<?php echo $row['id'];?>"/></td>
</tr>
<tr>
	<td>Grade</td>
	<td><input type="text" name ="grade" value="<?php echo $row['grade'];?>"/></td>
</tr>
</table>

<br>
<br>
<br>
<input type="submit" name="submit" value="update" />
</form>
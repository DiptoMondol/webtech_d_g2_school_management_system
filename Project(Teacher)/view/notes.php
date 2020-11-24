<?php
	//session starts
	session_start();
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
	}else {
		header("location:index.php");
	}
	//session ends
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Class Page</title>
	
</head>
<body>
 <table width="800px" border="1" align="center">
 	<?php include 'header.php';?>
 	<td>
 	<center>
	<h1>Notes For Students</h1>
	<select>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
		<option value="Class-C">Class-C</option>
		<option value="Class-D">Class-D</option>
	</select>
	    <form>
		<table>
			<tr>
				<td>
					<fieldset>
						<legend><b>File</b></legend>
			            <input type="file" name="fileToUpload" id="fileToUpload"><br>
			            <input type="submit" value="Upload File" name="submit">

		          </fieldset>
		     
				</td>
			</tr>
	
	    </form>
			
	    </table>
	   </center>
	 </td>
   </table>
</body>
</html>
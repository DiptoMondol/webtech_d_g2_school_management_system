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
</body>
</html>
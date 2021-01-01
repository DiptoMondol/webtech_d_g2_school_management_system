<?php
	//session starts
	session_start();
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
	}else {
		header("location:index.php");
	}
	
  $db = mysqli_connect("localhost", "root", "", "webtech");

  
  $msg = "";

  if (isset($_POST['upload'])) {

  	$image = $_FILES['image']['name'];
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  
  	$target = "../files/".basename($image);

  	$sql = "INSERT INTO notes (notes, notes_text) VALUES ('$image', '$image_text')";
  	
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
		echo $msg;
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  

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
	    <form method="POST" action="notes.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					<fieldset>
						<legend><b>File</b></legend>
						<input type="hidden" name="size" value="1000000">
			            <input type="file" name="image">
					<textarea 
						id="text" 
						cols="40" 
						rows="4" 
						name="image_text" 
						placeholder="Say something about this image...">
					</textarea>
			            <button type="submit" name="upload">POST</button>

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
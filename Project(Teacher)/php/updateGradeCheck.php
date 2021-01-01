<?php
 
if (isset($_POST['submit'])) {
	  		
		$serial = $_POST['serial'];
		$name = $_POST['name'];
		$id = $_POST['id'];
		$grade = $_POST['grade'];
		echo $serial;
		echo $name;
		echo $id;
		echo $grade;
		$sql = db::updateGrade($conobj,$serial,$name,$id,$grade);
		
		if ($sql === TRUE) {
		 header('Location:../view/updategrade.php');
		} else {
		echo "Error updating record: " ;
		}

	} 
   

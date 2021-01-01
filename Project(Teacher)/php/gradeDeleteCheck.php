<?php
include ('../model/db.php');
$id = $_GET['id'];

$connection = new db();
		
$conobj=$connection->OpenCon();



$sql = db::deleteStudentGradeInfo($conobj,$id);



	if ($sql === TRUE) {
		echo "DELETED SUCCESSFULLY";
		header('Location:../view/grade.php');
		}
		else {
		echo "Error Deleting record: " ;
		}



?>
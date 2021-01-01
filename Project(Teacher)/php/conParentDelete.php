<?php
global $select;
global $sql;
include ('../model/db.php');
echo  $_GET['name'];

$connection = new db();
		
$conobj=$connection->OpenCon();


if($select == "Class-A"){

$sql = db::deleteParentInfoa($conobj,$name);

}
else if($select == "Class-B"){
	
	$sql = db::deleteParentInfob($conobj,$name);
	
}
else{
	echo "something error";
}

	if ($sql === TRUE) {
		echo "DELETED SUCCESSFULLY";
		header('Location:../view/conparent.php');
		}
		else {
		echo "Error Deleting record: " ;
		}



?>
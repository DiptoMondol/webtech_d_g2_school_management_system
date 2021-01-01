<?php
include('../model/db.php');

$id = $_POST['id'];

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByID($conobj,"studentdetailsa",$id);



if ($MyQuery->num_rows > 0) {
    echo "<table border=1><tr><th>Serial</th><th>Name</th><th>Id</th><th>Age</th><th>Email</th><th>Parent Email</th><th>Gender</th><th>Phone</th><th>Grade</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["serial"]."</td><td>".$row["name"]."</td><td>".$row["id"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td><td>".$row["parentemail"]."</td><td>".$row["gender"]."</td><td>".$row["phone"]."</td><td>".$row["grade"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
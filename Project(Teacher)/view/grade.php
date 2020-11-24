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
				<form>
					<fieldset>
						<select>
							<option value="Class-A">Class-A</option>
							<option value="Class-B">Class-B</option>
							<option value="Class-C">Class-C</option>
							<option value="Class-D">Class-D</option>
						</select>
						<table border="1" cellspacing="0" cellpadding="5" align="center">
								<tr>
								<th>#SI</th>
								<th>Name</th>
								<th>Id</th>
								<th>Section</th>
								<th>80-100(A+)</th>
								<th>70-79(A)</th>
								<th>60-69(A-)</th>
								<th>50-59(B)</th>
								
								<th>Action</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Dipto</td>
								<td>17-34833-2</td>
								<th>A</th>
								<th>81</th>
								<th></th>
								<th></th>
								<th></th>
								<td>
									<button>Delete</button>

								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Reza</td>
								<td>17-34632-2</td>
								<th>B</th>
								<th>81</th>
								<th></th>
								<th></th>
								<th></th>
								<td>
									<button>Delete</button>

								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>RIDU</td>
								<td>17-35643-2</td>
								<th>A</th>
								<th></th>
								<th>75</th>
								<th></th>
								<th></th>
								<td>
									<button>Delete</button>

								</td>
								<tr>
								<td>3</td>
								<td>RIDU</td>
								<td>17-34833-2</td>
								<th>A</th>
								<th>81</th>
								<th></th>
								<th></th>
								<th></th>
								<td>
									<button>Delete</button>

								</td>
			            </table>
			    </fieldset>
			       </form>
			  </td>
			</tr>
	</table> 
</body>
</html>
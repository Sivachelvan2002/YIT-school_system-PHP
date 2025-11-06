<?php
	$id = $_GET['id'];
	require_once('../config.php');
	
	$query = "SELECT * FROM student WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);


?>
<DOCTYPE html>
<html>
<head>
<title>show-student</title>
<style>
	
	table{
		border-width:2px;
		border-style:solid;
		background-color:#ccc;
		text-align:center;
		align:center;
	}
	body {
            font-family: "Times New Roman", Times, serif;;
            background-color:#CBD99B ;
            color: #2F3542;
        }

</style>
</head>
<body>
<center>
<h2>Student Details</h2>
<table border="1" cellpadding = "10" cellspacing = "4">
	<tr>
		<th colspan = "2"> Student details  </th> 
	</tr>
	<tr>
		<td><label for="father_name">Father Name</label></td>
		<td><input type="text" name="father_name" id="father_name" value="<?php echo $row['father_name']?>">
		<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="student_name">Student Name</label></td>
		<td><input type="text" name="student_name" id="student_name" value="<?php echo $row['student_name']?>"></td>
	</tr>
	<tr>
		<td><label for="admission_number">Addmission Number</label></td>
		<td><input type="text" name="admission_number" id="admission_number" value="<?php echo $row['admission_number']?>"></td>
	</tr>
	<tr>
		<td><label for="grade_id">Grade Id</label></td>
		<td>
		<input type="SELECT" name="grade_id" id="grade_id" value="<?php echo $row['grade_id']?>">
		</td>
	</tr>
	<tr>
		<td><label for="nic_number">NIC Number</label></td>
		<td><input type="number" name="nic_number" id="nic_number" value="<?php echo $row['nic_number']?>"></td>
	</tr>
	<tr>
		<td><label for="date_of_birth">Date Of Birth</label></td>
		<td><input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row['date_of_birth']?>"></td>
	</tr>
	<tr>
		<td><label for="gender">Gender</label></td>
		<td><input type="text" name="gender" id="gender" value="<?php echo $row['gender']?>"></td>
	</tr>
	<tr>
		<td><label for="telephone_number">Telephone Number</label></td>
		<td><input type="text" name="telephone_number" id="telephone_number" value="<?php echo $row['telephone_number']?>"></td>
	</tr>
	<tr>
		<td><label for="address">Address</label></td>
		<td><input type="text" name="address" id="address" value="<?php echo $row['address']?>"></td>
	</tr>
	<tr>
		<td><label for="subjects">subjects</label></td>
		<td><input type="checkbox" name="address" id="address" value="<?php echo $row['address']?>"></td>
	</tr>
</table> </br>
	


</center>
</body>
</html>
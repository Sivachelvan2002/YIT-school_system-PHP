<?php
	require_once('../config.php');
	
	$query = "SELECT grade_id,grade_name FROM grades;";
	$results = mysqli_query($conn,$query);


?>

<DOCTYPE html>
<html>
<head>
<title>Student creation</title>
<style>
	body {
            font-family: "Times New Roman", Times, serif;;
            background-color:#CBD99B ;
            color: #2F3542;
        }
</style>
</head>
<body>
<center>
<form action="store.php" method="POST" enctype="multipart/form-data" autocomplete="on">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Student Registation </th> 
	</tr>
	<tr>
		<td><label for="id">Id</label></td>
		<td><input type="text" name="id" id="id" placeholder = "" required></td>
	</tr>
	<tr>
		<td><label for="profile">Profile</label></td>
		<td><input type="file" name="profile" id="profile" accept="image/jpg" ></td>
	</tr>
	<tr>
		<td><label for="father_name">Father Name</label></td>
		<td><input type="text" name="father_name" id="father_name" placeholder = "" required></td>
	</tr>
	<tr>
		<td><label for="student_name">Student Name</label></td>
		<td><input type="text" name="student_name" id="student_name" placeholder = "" required></td>
	</tr>
	<tr>
		<td><label for="admission_number">Addmission Number</label></td>
		<td><input type="text" name="admission_number" id="admission_number" placeholder = "" required></td>
	</tr>
	<tr>
		<td><label for="grade_id">Grade Id</label></td>
		<td>
		<select  name="grade_id" id="grade_id">
		<?php while($row=mysqli_fetch_assoc($results)){ ?>
			
			<option  value="<?php echo $row['grade_id'] ?>"> <?php echo $row['grade_name']; ?></option>
		<?php } ?>
		</select>
		
		</td>
	</tr>
	<tr>
		<td><label for="nic_number">Nic Number</label></td>
		<td><input type="number" name="nic_number" id="nic_number" step = "0.01"></td>
	</tr>
	<tr>
		<td><label for="dob">Date Of Birth</label></td>
		<td><input type="Date" name="date_of_birth" id="date_of_birth" ></td>
	</tr>
	<tr>
		<td><label for="gender">Gender</label></td>
    	<td>
        <input type="radio" name="gender" id="male" value="Male" required> <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="Female"> <label for="female">Female</label>
        <input type="radio" name="gender" id="other" value="Other"> <label for="other">Other</label>
    	</td>
	</tr>
	<tr>
		<td><label for="telepone_number">Telephone Number</label></td>
		<td><input type="number" name="telephone_number" id="telephone_number" ></td>
	</tr>
	<tr>
		<td><label for="address">Address</label></td>
		<td><input type="text" name="address" id="address" ></td>
	</tr>
</table> </br>
<input type="reset" value="Reset"> <input type="submit" value="Add">
	

</form>
</center>
</body>
</html>

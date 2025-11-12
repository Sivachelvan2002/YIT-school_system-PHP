<?php
	require_once('config.php');
	$query="select * from students;";
	$results=mysqli_query($conn,$query);
	

?>
<DOCTYPE html>
<html>
<head>
<style>
<title>Student-Details</title>
<style>
	

</style>
</head>
<body>
<h2><center>Student Details</center></h2>
<hr/>
	<table border="1" >
			<tr>
				<td>Id</td>
				<td>Profile</td>
				<td>Father Name</td>
				<td>Student Name</td>
				<td>Addmission Number</td>
				<td>Grade Id</td>
				<td>Nic Number</td>
				<td>Date of Birth</td>
				<td>Gender</td>
				<td>Telephone Number</td>
				<td>Address</td>
				
			</tr>
		<?php foreach($results as $students){ 
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $students['id']; ?></td>
				<td><img src="<?php echo $students['profile']; ?>"></td>
				<td><?php echo $students['father_name']; ?></td>
				<td><?php echo $students['student_name']; ?></td>
				<td><?php echo $students['admission_number']; ?></td>
				<td><?php echo $students['grade_id']; ?></td>
				<td><?php echo $students['nic_number']; ?></td>
				<td><?php echo $students['date_of_birth']; ?></td>
				<td><?php echo $students['gender']; ?></td>
				<td><?php echo $students['telephone_number']; ?></td>
				<td><?php echo $students['address']; ?></td>
				<td><button class="button"><a href="../student/edit.php?id=<?php echo $students['id'];?>" >Edit </a></button></td>
				<td><button class="button"><a href="../student/delete.php?id=<?php echo $students['id'] ?>" onclick ="return confirm('Are you sure !')">Delete </a></button></td>
				<td><button class="button"><a href="../student/show.php?id=<?php echo $students['id'];?>" >Show </a></button></td>
				<td><button class="button"><a href="../student/addsubject.php?id=<?php echo $students['id']; ?>">Add Subject </a></button>
				</td>
			</tr>
		<?php } ?>
	</table></br>
	<button><a href="create_form.php">Add Student</a></button>
</body>
</html>
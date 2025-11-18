<?php
	//require_once('../config.php');
	$query="SELECT * FROM students WHERE deleted_at IS NULL;";
	$results=mysqli_query($conn,$query);
	

?>
<h2><center>Student Details</center></h2>
<hr/>
	<table class="table table-dark table-hover table-sm table align-middle table-bordered border-secondary" >
			<tr>
				<td>Id</td>
				<td>Profile</td>
				<td>Father Name</td>
				<td>Student Name</td>
				<td>Addmission Number</td>
				<td>Grade</td>
				<td>Nic</td>
				<td>DoB</td>
				<td>Gender</td>
				<td>Phone</td>
				<td>Address</td>
				<td colspan="4"></td>
			</tr>
		<?php foreach($results as $students){ 
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $students['id']; ?></td>
				<td><img src="<?php echo substr($students['profile'],3) ?>" width="50px" height="50px"></td>
				<td><?php echo $students['father_name']; ?></td>
				<td><?php echo $students['student_name']; ?></td>
				<td><?php echo $students['admission_number']; ?></td>
				<td><?php echo $students['grade_id']; ?></td>
				<td><?php echo $students['nic_number']; ?></td>
				<td><?php echo $students['date_of_birth']; ?></td>
				<td><?php echo $students['gender']; ?></td>
				<td><?php echo $students['telephone_number']; ?></td>
				<td><?php echo $students['address']; ?></td>
				<td><a class="btn btn-outline-secondary" href="?section=student&page=edit&id=<?php echo $students['id'];?>" >Edit </a></td>
				<td><a class="btn btn-outline-danger" href="student/delete.php?id=<?php echo $students['id'] ?>" onclick ="return confirm('Are you sure !')">Delete </a></td>
				<td><a class="btn btn-outline-success" href="?section=student&page=show&id=<?php echo $students['id'];?>" >Show </a></td>
				<td><a class="btn btn-outline-info" href="?section=student&page=addsubject&id=<?php echo $students['id']; ?>">Add Subject </a>
				</td>
			</tr>
		<?php } ?>
	</table></br>
	<a class="btn btn-warning" href="?section=student&page=create-form">Add Student</a>

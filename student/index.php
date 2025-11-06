<?php
	require_once('../config.php');
	$query="select * from student;";
	$results=mysqli_query($conn,$query);
	

?>
<DOCTYPE html>
<html>
<head>
<style>
<title>Student-Details</title>
<style>
	.button{
		background-color: #6e3e70;
        color: #E7E7E7;
        font-size: 2em;
        font-weight: 600;
        letter-spacing: 1px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
	}
	table{
		border-width:2px;
		border-style:solid;
		background-color:pink;
		text-align:center;
	}
	body {
            font-family: "Times New Roman", Times, serif;;
            background-color:#CBD99B ;
            color: #2F3542;
        }

</style>
</head>
<body>
<h2><center>Student Details</center></h2>
<hr/>
	<table border="1" cellpadding = "5" cellspacing = "3">
			<tr>
				<td>Id</td>
				<td>Father Name</td>
				<td>Student Name</td>
				<td>Addmission Number</td>
				<td>Grade Id</td>
				<td>Nic Number</td>
				<td>Date of Birth</td>
				<td>Gender</td>
				<td>Telephone Number</td>
				<td>Address</td>
				<td>Created-at</td>
				<td>Created-by</td>
				<td>Updated-at</td>
				<td>Updated-by</td>
				<td>Deleted-at</td>
				<td>Deleted-by</td>
			</tr>
		<?php foreach($results as $students){ 
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $students['id']; ?></td>
				<td><?php echo $students['father_name']; ?></td>
				<td><?php echo $students['student_name']; ?></td>
				<td><?php echo $students['admission_number']; ?></td>
				<td><?php echo $students['grade_id']; ?></td>
				<td><?php echo $students['nic_number']; ?></td>
				<td><?php echo $students['date_of_birth']; ?></td>
				<td><?php echo $students['gender']; ?></td>
				<td><?php echo $students['telephone_number']; ?></td>
				<td><?php echo $students['address']; ?></td>
				<td><?php echo $students['created_at']; ?></td>
				<td><?php echo $students['created_by']; ?></td>
				<td><?php echo $students['updated_at']; ?></td>
				<td><?php echo $students['updated_by']; ?></td>
				<td><?php echo $students['deleted_at']; ?></td>
				<td><?php echo $students['deleted_by']; ?></td>
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
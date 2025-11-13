<?php
$id = $_GET['id'];
//require_once('../config.php');

$query = "SELECT * FROM students WHERE id = '$id' ;";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

//fetch subject_id from student_subject table
$query2 = "SELECT subject_id FROM student_subject WHERE student_id = $id";
$results2 = mysqli_query($conn, $query2);
//assign subject_id to $results2_array
$results2_array = [];
while ($row2 = mysqli_fetch_assoc($results2)) {
	$results2_array[] = $row2['subject_id'];
}
$query1 = "SELECT id, subject_name FROM subjects";
$results1 = mysqli_query($conn, $query1);
if (!$results1) {
	echo mysqli_error($conn);
	exit;
}
$subjects = [];
//assign every row of id,subject_name to $subjects[]
while ($row1 = mysqli_fetch_assoc($results1)) {
	$subjects[] = $row1;
}


?>
<h2>Student Details</h2>
<table border="1" cellpadding="10" cellspacing="4">
	<tr>
		<th colspan="2"> Student details </th>
	</tr>
	<tr>
		<td colspan="2"><img src="<?php echo substr($row['profile'],3);?>" width="100px" height="100px" ></td>

	</tr>
	<tr>
		<td><label for="father_name">Father Name</label></td>
		<td><input type="text" name="father_name" id="father_name" value="<?php echo $row['father_name'] ?>">
			<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
		</td>
	</tr>
	<tr>
		<td><label for="student_name">Student Name</label></td>
		<td><input type="text" name="student_name" id="student_name" value="<?php echo $row['student_name'] ?>"></td>
	</tr>
	<tr>
		<td><label for="admission_number">Addmission Number</label></td>
		<td><input type="text" name="admission_number" id="admission_number" value="<?php echo $row['admission_number'] ?>"></td>
	</tr>
	<tr>
		<td><label for="grade_id">Grade Id</label></td>
		<td>
			<input type="SELECT" name="grade_id" id="grade_id" value="<?php echo $row['grade_id'] ?>">
		</td>
	</tr>
	<tr>
		<td><label for="nic_number">NIC Number</label></td>
		<td><input type="number" name="nic_number" id="nic_number" value="<?php echo $row['nic_number'] ?>"></td>
	</tr>
	<tr>
		<td><label for="date_of_birth">Date Of Birth</label></td>
		<td><input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row['date_of_birth'] ?>"></td>
	</tr>
	<tr>
		<td><label for="gender">Gender</label></td>
		<td>
			<input type="radio" name="gender" id="male" value="male"
				<?php if ($row['gender'] == 'male') echo 'checked'; ?>>
			<label for="male">Male</label>

			<input type="radio" name="gender" id="female" value="female"
				<?php if ($row['gender'] == 'female') echo 'checked'; ?>>
			<label for="female">Female</label>

			<input type="radio" name="gender" id="other" value="other"
				<?php if ($row['gender'] == 'other') echo 'checked'; ?>>
			<label for="other">Other</label>
		</td>
	</tr>
	<tr>
		<td><label for="telephone_number">Telephone Number</label></td>
		<td><input type="text" name="telephone_number" id="telephone_number" value="<?php echo $row['telephone_number'] ?>"></td>
	</tr>
	<tr>
		<td><label for="address">Address</label></td>
		<td><input type="text" name="address" id="address" value="<?php echo $row['address'] ?>"></td>
	</tr>
	<tr>
		<td><label for="subjects">subjects</label></td>
		<td>
			<?php foreach ($subjects as $subject) { ?>
				<?php if (in_array($subject['id'], $results2_array)) { ?>
					<input type="text" name="subjects" id="subjects" value="<?php echo $subject['subject_name']; ?>"><br />
				<?php } ?>
			<?php } ?>
		</td>
	</tr>
</table> 
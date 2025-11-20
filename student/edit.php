<?php
$id = $_GET['id'];
//require_once('../config.php');

$query = "SELECT * FROM students WHERE id = '$id' ;";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$profilepath = $row['profile'];


$query1 = "SELECT grade_id,grade_name FROM grades;";
$results = mysqli_query($conn, $query1);

?>
<style>
	.card {
		width: 24rem;

	}

	img {
		width: 300px;
		height: 300px;
		border-radius: 20%;
		border-color: blue;
		box-shadow: 10px 10px gray;
		margin-bottom: 30px;
		
	}
	img:hover{
		transform: scale(1.2);
		transition-duration: 0.5s;
		border: 2px solid blueviolet;
	}

	.button {
		display: flex;
		justify-content: center;
		align-items: center;
		gap: 10px;

	}

	.main {
		display: flex;
		justify-content: center;
		align-items: center;
	}
</style>
<div class=" bg-gradient">
<h4 class="text-center mb-4 bg-secondary p-2">Edit student Details</h4>
<div class="main ">
	<div class="">
		<div class="">
			<img src="<?php echo substr($profilepath, 3) ?>" ><br />

		</div>
		<div class="button">
			<a class="btn btn-outline-danger" href="student/delete-profile.php?id=<?php echo $row['id'] ?>&path=<?php echo $row['profile'] ?>">Delete Image</a></button>
			<input type="file" name="myfile" id="myfile">
		</div>



	</div>
	<form action="student/update.php?path=<?php echo $profilepath ?>" method="POST" enctype="multipart/form-data" autocomplete="on">
		<div class="card">
			<table class="table table-dark table-hover table-bordered">

				<tr>
					<td>
						<label for="father_name">Father Name</label>
					</td>
					<td><input type="text" name="father_name" value="<?php echo $row['father_name'] ?>">
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
						<select name="grade_id">
							<?php while ($row1 = mysqli_fetch_assoc($results)) { ?>

								<option value="<?php echo $row1['grade_id']; ?>"
									<?php if ($row1['grade_id'] == $row['grade_id']) echo "selected"; ?>>

									<?php echo $row1['grade_name']; ?>

								</option>
							<?php } ?>
						</select>
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
					<div>
						<td colspan="2" class="">
							<div class="text-center button text-center">
								<input type="reset" class="btn btn-outline-danger" value="Reset">
								<input type="submit" class="btn btn-outline-success" value="Save">
							</div>
						</td>

					</div>

				</tr>
			</table>

		</div>




	</form>

</div>
</div>
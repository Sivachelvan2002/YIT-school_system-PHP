<DOCTYPE html>
	<html>

	<head>
		<title>Edit-student</title>
		<style>
			table {
				border-width: 2px;
				border-style: solid;
				background-color: #ccc;
				text-align: center;
				align: center;
			}

			body {
				font-family: "Times New Roman", Times, serif;
				;
				background-color: #CBD99B;
				color: #2F3542;
			}

			img {
				width: 100px;
				height: 100px;
				border-radius: 50%;
			}

			.profile td {
				background-color: #CBD99B;
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				align-items: center;
			}
		</style>
	</head>

	<body>
		<?php
		$id = $_GET['id'];
		//require_once('../config.php');

		$query = "SELECT * FROM students WHERE id = '$id' ;";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);


		$query1 = "SELECT grade_id,grade_name FROM grades;";
		$results = mysqli_query($conn, $query1);

		?>
		<center>
			<form action="update.php" method="POST" enctype="multipart/form-data" autocomplete="on">
				<table border="1" cellpadding="10" cellspacing="4">
					<tr>
						<th colspan="2"> Edit Student details </th>
					</tr>
					<tr>
						<div class="profile">
							<td colspan="2"> <img src="<?php echo $row['profile'] ?>"><br />

								<button><a href="delete_profile.php?id=<?php echo $row['id'] ?>">Delete Image</a></button>
								<input type="file" name="myfile" id="myfile" accept="image/jpg">

							</td>
						</div>


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
							<select name="grade_id">
								<?php while ($row1 = mysqli_fetch_assoc($results)) { ?>

									<option value="<?php echo $row1['grade_id']; ?>"><?php echo $row1['grade_name'] ?></option>
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
				</table> </br>
				<input type="reset" value="Reset"> <input type="submit" value="Save">


			</form>
		</center>
	</body>

	</html>
<?php
$id = $_GET['id'];
//require_once('../config.php');

$query = "SELECT * FROM subjects WHERE id = '$id' ;";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>
<style>
	.edit-subject {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}
</style>
<h4 class="text-center mb-4 bg-secondary p-2">Edit Subject Details</h4>
<form action="subject/update.php" method="POST" autocomplete="on" class="edit-subject">
	<table class="table table-hover table-dark table-striped" style="width: 24rem;">
		
		<tr>
			<td><label for="subject_name">Subject Name</label></td>
			<td><input type="text" name="subject_name" id="subject_name" value="<?php echo $row['subject_name'] ?>">
				<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
			</td>
		</tr>
		<tr>
			<td><label for="subject_index">Subject Index</label></td>
			<td><input type="text" name="subject_index" id="subject_index" value="<?php echo $row['subject_index'] ?>"></td>
		</tr>
		<tr>
			<td><label for="subject_order">Subject Order</label></td>
			<td><input type="text" name="subject_order" id="subject_order" value="<?php echo $row['subject_order'] ?>"></td>
		</tr>
		<tr>
			<td><label for="subject_color">Subject Color</label></td>
			<td><input type="color" name="subject_color" id="subject_color" value="<?php echo $row['subject_color'] ?>"></td>
		</tr>
		<tr>
			<td><label for="subject_number">Subject Number</label></td>
			<td><input type="text" name="subject_number" id="subject_number" value="<?php echo $row['subject_number'] ?>"></td>
		</tr>

	</table> </br>
	<div><input type="reset" value="Reset" class="btn btn-outline-danger"> <input type="submit" value="Save" class="btn btn-outline-success"></div>



</form>
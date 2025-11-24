<style>
	.add-subject {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}
</style>
<h4 class="text-center mb-4 bg-secondary p-2">Subject Details</h4>
<form action="subject/store.php" method="POST" autocomplete="on" class="add-subject">

	<table class="table table-dark table-hover" style="width: 24rem;">


		<tr>
			<td><label for="subject_name">Subject Name</label></td>
			<td><input type="text" name="subject_name" id="subject_name" placeholder="" required></td>
		</tr>
		<tr>
			<td><label for="subject_index">Subject Index</label></td>
			<td><input type="text" name="subject_index" id="subject_index" placeholder="" required></td>
		</tr>
		<tr>
			<td><label for="subject_order">Subject Order</label></td>
			<td><input type="text" name="subject_order" id="subject_order" placeholder="" required></td>
		</tr>
		<tr>
			<td><label for="subject_color">Subject Color</label></td>
			<td><input type="color" name="subject_color" id="subject_color" placeholder="" maxlength="10"></td>
		</tr>
		<tr>
			<td><label for="subject_number">Subject Number</label></td>
			<td><input type="text" name="subject_number" id="subject_number" placeholder="" maxlength="10"></td>
		</tr>

	</table>

	</br>
	<div>
		<input type="reset" value="Reset" class="btn btn-outline-danger"><?php echo "\t"; ?><input type="submit" value="Add" class="btn btn-outline-success">
	</div>

</form>
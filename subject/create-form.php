<form action="subject/store.php" method="POST" autocomplete="on">

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th colspan="2"> Subject Registation </th>
		</tr>

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
	<button><input type="reset" value="Reset"></button><?php echo "\t"; ?><button><input type="submit" value="Add"></button>


</form>
<?php
	$id = $_GET['id'];
	
	$query = "SELECT * FROM grades WHERE grade_id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);


?>

<h2>Grade Details</h2>
<table border="1" cellpadding = "10" cellspacing = "4">
	<tr>
		<th colspan = "2">Grade details  </th> 
	</tr>
	<tr>
		<td><label for="grade_name">Grade Name</label></td>
		<td>
		<input type="text" name="grade_name" id="grade_name" value="<?php echo $row['grade_name'];?>">
		
		</td>
	</tr>
	<tr>
		<td><label for="grade_group">Grade Group</label></td>
		<td><input type="text" name="grade_group" id="grade_group" value="<?php echo $row['grade_group']?>"></td>
	</tr>
	<tr>
		<td><label for="grade_color">Grade Color</label></td>
		<td><input type="color" name="grade_color" id="grade_color" value="<?php echo $row['grade_color']?>"></td>
	</tr>
	<tr>
		<td><label for="grade_order">Grade Order</label></td>
		<td><input type="text" name="grade_order" id="grade_order" value="<?php echo $row['grade_order']?>"></td>
	</tr>
	
</table> </br>


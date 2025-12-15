<?php 
	$id = $_GET['id'];
	
	
	$query = "SELECT * FROM grades WHERE grade_id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
?>
<style>
	.edit-grade {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}
</style>
<h4 class="text-center mb-4 bg-secondary p-2">Edit Grade Details</h4>
<form action="grade/update.php" method = "POST" autocomplete = "on" class="edit-grade">
<table class="table table-dark table-hover" style="width: 24rem;">
	
	<tr>
		<td><label for="grade_name">Grade Name</label></td>
		<td><input type="text" name="grade_name" id="grade_name" value="<?php echo $row['grade_name']?>">
		<input type="hidden" name="id" id="id" value="<?php echo $row['grade_id'] ?>"></td>
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
		<td><input type="number" name="grade_order" id="grade_order" step="0.1" value="<?php echo $row['grade_order']?>"></td>
	</tr>
	
</table> </br>
<div>
<a class="btn btn-outline-danger" href="grade/delete.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure !')">Delete </a>
<input type="submit" value="Save" class="btn btn-outline-success">
</div>	

</form>


<?php
require_once('auth/session.php');
require_once('config.php');


$query = "SELECT * FROM grades;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}

?>
<h2 class="text-center mb-4 bg-secondary p-2">Grade Details</h2>
<hr/>
	<table class="table table-dark table-hover">
			<tr>
				<td>Id</td>
				<td>Grade Name</td>
				<td>Grade Group</td>
				<td>Grade Color</td>
				<td>Grade Order</td>
				<td colspan="4"></td>
				
			</tr>
		<?php foreach($results as $grade){ ?>
				
			<tr>
				<td><?php echo $grade['grade_id']; ?></td>
				<td><?php echo $grade['grade_name']; ?></td>
				<td><?php echo $grade['grade_group']; ?></td>
				<td><input type="color" value="<?php echo $grade['grade_color']; ?>"</td>
				<td><?php echo $grade['grade_order']; ?></td>
				<td><a class="btn btn-outline-secondary" href="?section=grade&page=edit&id=<?php echo $grade['grade_id'];?>" >Edit </a></td>
				<td><a class="btn btn-outline-danger" href="grade/delete.php?id=<?php echo $grade['grade_id'];?>" onclick ="return confirm('Are you sure !')">Delete </a></td>
				<td><a class="btn btn-outline-success" href="?section=grade&page=show&id=<?php echo $grade['grade_id'];?>" >Show </a></td>
				<td><a class="btn btn-outline-info" href="?section=grade&page=addsubject&id=<?php echo $grade['grade_id']; ?>">Add Subject </a>
				</td>
			</tr>
		<?php } ?>
	</table></br>
	<a class="btn btn-warning" href="?section=grade&page=create-form">Add Grade</a>
</body>
</html>
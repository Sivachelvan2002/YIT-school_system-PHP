<?php
require_once('auth/session.php');
require_once('config.php');


$query = "SELECT * FROM grades;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}

?>
<h2><center>Grade Details</center></h2>
<hr/>
	<table border="1" cellpadding = "5" cellspacing = "3">
			<tr>
				<td>Id</td>
				<td>Grade Name</td>
				<td>Grade Group</td>
				<td>Grade Color</td>
				<td>Grade Order</td>
				
			</tr>
		<?php foreach($results as $grade){ ?>
				
			<tr>
				<td><?php echo $grade['grade_id']; ?></td>
				<td><?php echo $grade['grade_name']; ?></td>
				<td><?php echo $grade['grade_group']; ?></td>
				<td><input type="color" value="<?php echo $grade['grade_color']; ?>"</td>
				<td><?php echo $grade['grade_order']; ?></td>
				<td><button class="button"><a href="?section=grade&page=edit&id=<?php echo $grade['grade_id'];?>" >Edit </a></button></td>
				<td><button class="button"><a href="grade/delete.php?id=<?php echo $grade['grade_id'];?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					</td>
				<td><button class="button"><a href="?section=grade&page=show&id=<?php echo $grade['grade_id'];?>" >Show </a></button></td>
				<td><button class="button"><a href="?section=grade&page=addsubject&id=<?php echo $grade['grade_id']; ?>">Add Subject </a></button>
				</td>
			</tr>
		<?php } ?>
	</table></br>
	<button><a href="?section=grade&page=create-form">Add Grade</a></button>
</body>
</html>
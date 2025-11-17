<?php
//require_once('config.php');

$query = "SELECT * FROM subjects;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}

?>
<h2><center>Subject Details</center></h2>
<hr/>
	<table border="1" cellpadding = "5" cellspacing = "3">
			<tr>
				<td>Id</td>
				<td>Subject Name</td>
				<td>Subject Index</td>
				<td>Subject Order</td>
				<td>Subject Color</td>
				<td>Subject Number</td>
				
			</tr>
		<?php foreach($results as $subject){ ?>
				
			<tr>
				<td><?php echo $subject['id']; ?></td>
				<td><?php echo $subject['subject_name']; ?></td>
				<td><?php echo $subject['subject_index']; ?></td>
				<td><?php echo $subject['subject_order']; ?></td>
				<td><input type="color" value="<?php echo $subject['subject_color']; ?>"></td>
				<td><?php echo $subject['subject_number']; ?></td>
				<td><button ><a href="?section=subject&page=edit&id=<?php echo $subject['id'];?>" >Edit </a></button></td>
				<td><button ><a href="subject/delete.php?id=<?php echo $subject['id'] ?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					</td>
				<td><button ><a href="?section=subject&page=show&id=<?php echo $subject['id'];?>" >Show </a></button></td>
			</tr>
		<?php } ?>
	</table></br>
	<button><a href="?section=subject&page=create-form">Add Subject</a></button>

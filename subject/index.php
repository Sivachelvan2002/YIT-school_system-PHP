<?php
require_once('../config.php');

$query = "SELECT * FROM subject;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}

?>

<DOCTYPE html>
<html>
<head>

<title>Grade-Details</title>
<style>
	h2{
		background-color:#ccc;
	}
	table{
		border-width:2px;
		border-style:solid;
		background-color:pink;
		text-align:center;
	}
	body{
		background-color:#fbe1ab;
	}
	button{
		background-color:#e4e9e4;
		padding:5px 10px;
		
	}

</style>
</head>
<body>
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
				<td>Created-at</td>
				<td>Created-by</td>
				<td>Updated-at</td>
				<td>Updated-by</td>
				<td>Deleted-at</td>
				<td>Deleted-by</td>
			</tr>
		<?php foreach($results as $subject){ ?>
				
			<tr>
				<td><?php echo $subject['id']; ?></td>
				<td><?php echo $subject['subject_name']; ?></td>
				<td><?php echo $subject['subject_index']; ?></td>
				<td><?php echo $subject['subject_order']; ?></td>
				<td><?php echo $subject['subject_color']; ?></td>
				<td><?php echo $subject['subject_number']; ?></td>
				<td><?php echo $subject['created_at']; ?></td>
				<td><?php echo $subject['created_by']; ?></td>
				<td><?php echo $subject['updated_at']; ?></td>
				<td><?php echo $subject['updated_by']; ?></td>
				<td><?php echo $subject['deleted_at']; ?></td>
				<td><?php echo $subject['deleted_by']; ?></td>
				<td><button ><a href="../subject/edit.php?id=<?php echo $subject['id'];?>" >Edit </a></button></td>
				<td><button ><a href="../subject/delete.php?id=<?php echo $subject['id'] ?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					</td>
			</tr>
		<?php } ?>
	</table></br>
	<button><a href="create_form.php">Add Subject</a></button>
</body>
</html>
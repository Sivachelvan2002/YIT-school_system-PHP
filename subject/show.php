<?php
	$id = $_GET['id'];
	require_once('../config.php');
	
	$query = "SELECT * FROM subjects WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);


?>
<DOCTYPE html>
<html>
<head>
<title>show-subject</title>
<style>
	
	table{
		border-width:2px;
		border-style:solid;
		background-color:#ccc;
		text-align:center;
		align:center;
	}
	body {
            font-family: "Times New Roman", Times, serif;;
            background-color:#CBD99B ;
            color: #2F3542;
        }

</style>
</head>
<body>
<center>
<h2>Subject Details</h2>
<table border="1" cellpadding = "10" cellspacing = "4">
	<tr>
		<th colspan = "2">Subject details  </th> 
	</tr>
	<tr>
		<td><label for="subject_name">Subject Name</label></td>
		<td><input type="text" name="subject_name" id="subject_name" value="<?php echo $row['subject_name']?>">
		<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="subject_index">Subject Index</label></td>
		<td><input type="text" name="subject_index" id="subject_index" value="<?php echo $row['subject_index']?>"></td>
	</tr>
	<tr>
		<td><label for="subject_order">Subject Order</label></td>
		<td><input type="text" name="subject_order" id="subject_order" value="<?php echo $row['subject_order']?>"></td>
	</tr>
	<tr>
		<td><label for="subject_color">Subject Color</label></td>
		<td><input type="color" name="subject_color" id="subject_color" value="<?php echo $row['subject_color']?>"></td>
	</tr>
	<tr>
		<td><label for="subject_number">Subject Number</label></td>
		<td><input type="text" name="subject_number" id="subject_number" value="<?php echo $row['subject_number']?>"></td>
	</tr>
	
</table> </br>


</center>
</body>
</html>
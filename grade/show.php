<?php
	$id = $_GET['id'];
	require_once('../config.php');
	
	$query = "SELECT * FROM subject WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);


?>
<DOCTYPE html>
<html>
<head>
<title>show-Grade</title>
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
<h2>Grade Details</h2>
<table border="1" cellpadding = "10" cellspacing = "4">
	<tr>
		<th colspan = "2">Grade details  </th> 
	</tr>
	<tr>
		<td><label for="grade_name">Grade Name</label></td>
		<td><input type="text" name="grade_name" id="grade_name" value="<?php echo $row['grade_name']?>">
		<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="grade_group">Grade Group</label></td>
		<td><input type="text" name="grade_group" id="grade_group" value="<?php echo $row['grade_group']?>"></td>
	</tr>
	<tr>
		<td><label for="grade_color">Grade Color</label></td>
		<td><input type="text" name="grade_color" id="grade_color" value="<?php echo $row['grade_color']?>"></td>
	</tr>
	<tr>
		<td><label for="grade_order">Grade Order</label></td>
		<td><input type="text" name="grade_order" id="grade_order" value="<?php echo $row['grade_order']?>"></td>
	</tr>
	
</table> </br>

</center>
</body>
</html>
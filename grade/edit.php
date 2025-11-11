<DOCTYPE html>
<html>
<head>
<title>Edit-Grade</title>
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
            background-color:#568F87 ;
            color: #2F3542;
        }

</style>
</head>
<body>
<?php 
	$id = $_GET['id'];
	require_once('../config.php');
	
	$query = "SELECT * FROM grades WHERE grade_id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
?>
<center>
<form action="update.php" method = "POST" autocomplete = "on">
<table border="1" cellpadding = "10" cellspacing = "4">
	<tr>
		<th colspan = "2"> Edit Grade details  </th> 
	</tr>
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
		<td><input type="text" name="grade_order" id="grade_order" value="<?php echo $row['grade_order']?>"></td>
	</tr>
	
</table> </br>
<input type="reset" value="Reset"> <input type="submit" value="Save">
	

</form>
</center>
</body>
</html>

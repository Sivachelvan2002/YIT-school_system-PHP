<DOCTYPE html>
<html>
<head>
<title>Grade creation</title>
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
<center>
<form action="store.php" method = "POST" autocomplete = "on">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Grade Registation </th> 
	</tr>
	<tr>
		<td><label for="id">Id</label></td>
		<td><input type="text" name="id" id="id" placeholder = "Enter your id number.." required></td>
	</tr>
	<tr>
		<td><label for="grade_name">Grade Name</label></td>
		<td><input type="text" name="grade_name" id="grade_name" placeholder = "Enter the Grade name..." required></td>
	</tr>
	<tr>
		<td><label for="grade_group">Grade Group</label></td>
		<td><input type="text" name="grade_group" id="grade_group" placeholder = "Enter the Grade group..." required></td>
	</tr>
	<tr>
		<td><label for="grade_color">Grade color</label></td>
		<td><input type="text" name="grade_color" id="grade_color" placeholder = "Enter your grade_color..." required></td>
	</tr>
	<tr>
		<td><label for="grade_order">Grade Order</label></td>
		<td><input type="text" name="grade_order" id="grade_order" placeholder = "Enter your Grade order...." maxlength = "10"></td>
	</tr>
	
</table> </br>
<input type="reset" value="Reset"> <input type="submit" value="Add">
	

</form>
</center>
</body>
</html>

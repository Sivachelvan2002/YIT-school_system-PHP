<DOCTYPE html>
<html>
<head>
<title>subject creation</title>
<style>
	h2{
		background-color:#ccc;
	}
	table{
		border-width:2px;
		border-style:solid;
		background-color:pink;
		text-align:center;
		align:center;
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
<center>
<form action="store.php" method = "POST" autocomplete = "on">

<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Subject Registation </th> 
	</tr>
	<tr>
		<td><label for="id">Id</label></td>
		<td><input type="text" name="id" id="id" placeholder = "Enter your id number.." required></td>
	</tr>
	<tr>
		<td><label for="subject_name">Subject Name</label></td>
		<td><input type="text" name="subject_name" id="subject_name" placeholder = "Enter the Subject name..." required></td>
	</tr>
	<tr>
		<td><label for="subject_index">Subject Index</label></td>
		<td><input type="text" name="subject_index" id="subject_index" placeholder = "Enter the subject index..." required></td>
	</tr>
	<tr>
		<td><label for="subject_order">Subject Order</label></td>
		<td><input type="text" name="subject_order" id="subject_order" placeholder = "Enter your subject order..." required></td>
	</tr>
	<tr>
		<td><label for="subject_color">Subject Color</label></td>
		<td><input type="text" name="subject_color" id="subject_color" placeholder = "Enter your Subject Color...." maxlength = "10"></td>
	</tr>
	<tr>
		<td><label for="subject_number">Subject Number</label></td>
		<td><input type="text" name="subject_number" id="subject_number" placeholder = "Enter your Subject Number...." maxlength = "10"></td>
	</tr>
	
</table> 

</br>
<button><input type="reset" value="Reset"></button><?php echo "\t";?><button><input type="submit" value="Add"></button>
	

</form>
</center>
</body>
</html>

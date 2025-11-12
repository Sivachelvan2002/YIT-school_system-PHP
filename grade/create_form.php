<form action="?section=grade&page=store" method = "POST" autocomplete = "on">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Grade Registation </th> 
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


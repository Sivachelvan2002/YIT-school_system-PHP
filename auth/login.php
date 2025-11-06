<?php
require_once('../config.php');

$query = "SELECT username,password FROM user;";
$results = mysqli_query($conn,$query);




?>
<DOCTYPE html>
<html>
<head>
<title>Edit-student</title>
<style>
	
	table{
		border-width:2px;
		border-style:solid;
		background-color:#ccc;
		text-align:center;
		align:center;
	}
	
	form{
		border-width:2px;
		border-style:solid;
		width:20%;
		height:50vh;
		text-align:center;
		padding:10px 10px;
		border-radius: 20px;
		align:center;
		margin:20px;
		background-color:pink;
	}

</style>
</head>
<body>
<center>
<form method="POST" action="islogin.php">
<h2>Login Form</h2>
    <b><label>Username:</label></b>
    <input type="text" name="username"><br><br>
     <b><label>Password:</label> </b>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
	<input type="reset" value="Reset">
</form>
</center>








</body>
</html>

<?php
require_once('../config.php');
$query = "SELECT username,password FROM user;";
$results = mysqli_query($conn, $query);
?>
<DOCTYPE html>
	<html>

	<head>
		<title>Edit-student</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<style>
			.container {
				display: flex;
				justify-content: center;
				align-items: center;
			}
		</style>
	</head>

	<body class="bg-gradient">
		<div class="container mt-5">
			<div class="card" style="width: 18rem;">
				<div class="card-header text-center bg-secondary.bg-gradient text-dark">Login Form</div>
				<div class="card-body ">
					<form method="POST" action="islogin.php">
						<div class="mb-3">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username">
						</div>
						<div class="mb-3">
							<label for="password">Password:</label>
							<input type="password" name="password" id="password">
						</div>
						<div class="mb-3">
							<input type="submit" value="Login" class="btn btn-primary">
							<input type="reset" value="Reset" class="btn btn-warning">
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>

	</html>
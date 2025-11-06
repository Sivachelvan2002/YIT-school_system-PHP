<?php 
	session_start();
	session_destroy();
	header("Location: http://localhost/selvanphp/school-system/auth/login.php");
	exit();

?>
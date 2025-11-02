<?php

require_once('../config.php');
$username=$_POST['username'];
$password=$_POST['password'];

$query = "SELECT * FROM user where username='$username' and password='$password' ;";
$results = mysqli_query($conn,$query);
$row=mysqli_num_rows($results);
if($row==1){
	$_SESSION['username']=$username;
	header("Location: ../index.php");
	
}
else{
	echo "login failed";
	header("Location: ./login.php");
}

?>
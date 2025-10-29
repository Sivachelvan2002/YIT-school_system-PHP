<?php
$conn = mysqli_connect("localhost","root","","school_system_db");

if(!$conn){
	die("Database failed to connect!".mysqli_connect_error());
}
?>
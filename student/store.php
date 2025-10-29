<?php
if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	$id = $_POST['id'];
	$father_name  =$_POST['father_name'];
	$student_name = $_POST['student_name'];
	$admission_number = $_POST['admission_number'];
	$grade_id = $_POST['grade_id'];
	$nic_number = $_POST['nic_number'];
	$date_of_birth = $_POST['date_of_birth'];
	$gender = $_POST['gender'];
	$telephone_number = $_POST['telephone_number'];
	$address = $_POST['address'];
	
	require_once('../config.php');
	$query = "INSERT INTO student(id,father_name,student_name,admission_number,grade_id,nic_number,date_of_birth,gender,telephone_number,address) VALUES('$id','$father_name','$student_name','$admission_number','$grade_id','$nic_number','$date_of_birth','$gender','$telephone_number','$address');";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	header("Location: index.php");
}

?>
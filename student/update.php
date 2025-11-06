<?php
require_once('../config.php');
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
	
	$query = "UPDATE student SET father_name = '$father_name' ,student_name = '$student_name',admission_number = '$admission_number',grade_id = '$grade_id',nic_number = '$nic_number',date_of_birth='$date_of_birth',gender='$gender',telephone_number='$telephone_number',address='$address' WHERE id ='$id'; ";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	header("Location: index.php");
}

?>
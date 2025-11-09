<?php
	$target_dir="upload/";
	$target_file= $target_dir.basename($_FILES["profile"]["name"]);
	$original_file_name= basename($_FILES["profile"]["name"]);
	$allowedTypes=['jpg','jpeg','png','gif'];
	
	$img_file_type=strtolower( pathinfo($target_file,PATHINFO_EXTENSION));
	
	
	if(in_array($img_file_type,$allowedTypes)){
		$size= (int) $_FILES["profile"]["size"];
	
	
		if(move_uploaded_file($_FILES["profile"]["tmp_name"],$target_file)){
			echo "file uploaded successfully!";
		}
	} else {
		echo " Upload Only allowed file types";
	}

if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	$id = $_POST['id'];
	$profile = $original_file_name;
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
	$query = "INSERT INTO student(id,profile,father_name,student_name,admission_number,grade_id,nic_number,date_of_birth,gender,telephone_number,address) VALUES('$id','$profile','$father_name','$student_name','$admission_number','$grade_id','$nic_number','$date_of_birth','$gender','$telephone_number','$address');";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	//header("Location: index.php");
}

?>
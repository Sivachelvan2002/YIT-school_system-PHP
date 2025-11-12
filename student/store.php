<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$target_file = "";
	if (!empty($_FILES['profile']['name'])) {
		$file = $_FILES['profile'];
	}
	$id = $_POST['id'];
	$father_name  = $_POST['father_name'];
	$student_name = $_POST['student_name'];
	$admission_number = $_POST['admission_number'];
	$grade_id = $_POST['grade_id'];
	$nic_number = $_POST['nic_number'];
	$date_of_birth = $_POST['date_of_birth'];
	$gender = $_POST['gender'];
	$telephone_number = $_POST['telephone_number'];
	$address = $_POST['address'];

	require_once('../config.php');
	//check admission number 
	$checkQuery = "SELECT * FROM students WHERE admission_number = '$admission_number'";
	$checkResult = mysqli_query($conn, $checkQuery);

	if (mysqli_num_rows($checkResult) > 0) {
		echo "<script>
            alert('Admission number already exists!');
            window.history.back();
            </script>";
		exit();
	}

	
	if (isset($file) && $file['name'] != '') {
		$target_dir = "../upload/";
		$target_file = $target_dir . basename($file["name"]);
		$original_file_name = basename($file["name"]);
		$allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

		$img_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


		if (in_array($img_file_type, $allowedTypes)) {
			$size = (int) $file["size"];


			if (move_uploaded_file($file["tmp_name"], $target_file)) {
				echo "file uploaded successfully!";
			}
		} else {
			echo " Upload Only allowed file types";
		}
	}
	$query = "INSERT INTO students(id,profile,father_name,student_name,admission_number,grade_id,nic_number,date_of_birth,gender,telephone_number,address) VALUES('$id','$target_file','$father_name','$student_name','$admission_number','$grade_id','$nic_number','$date_of_birth','$gender','$telephone_number','$address');";
	$results = mysqli_query($conn, $query);

	if (!$results) {
		echo mysqli_error($conn);
	}
	header("Location: index.php");
	exit();
}
?>
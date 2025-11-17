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
	$checkQuery = "SELECT admission_number,nic_number FROM students";
	$checkResult = mysqli_query($conn, $checkQuery);
	$admission_numbers = [];
	$nic_numbers = [];
	while ($row = mysqli_fetch_assoc($checkResult)) {
		$admission_numbers[] = $row['admission_number'];
		$nic_numbers[] = $row['nic_number'];
	}

	if (in_array($admission_number, $admission_numbers) && in_array($nic_number, $nic_numbers)) {
		echo "<script>
            alert('admission number and nic number already exists!');
            window.history.back();
            </script>";
		exit();
	} elseif (in_array($admission_number, $admission_numbers)) {
		echo "<script>
            alert('Addmission number already exists!');
            window.history.back();
            </script>";
		exit();
	} elseif (in_array($nic_number, $nic_numbers)) {
		echo "<script>
            alert('Nic number already exists!');
            window.history.back();
            </script>";
		exit();
	} else {

	
	if (isset($file) && $file['name'] != '') {
		$target_dir = "../upload/";
		$target_file = $target_dir . basename($file["name"]);
		$original_file_name = basename($file["name"]);
		$allowedTypes = ['jpg', 'jpeg', 'png', 'gif','webk'];

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
	header("Location:../index.php?section=student&page=index");
	exit();
}
}
?>
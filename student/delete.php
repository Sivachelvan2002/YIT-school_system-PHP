<?php
$id = $_GET['id'];

require_once('../config.php');
//insert delete row into student logs table
$select_query="SELECT * FROM students WHERE id=$id";
$select_results=mysqli_query($conn,$select_query);
$row=mysqli_fetch_array($select_results);
$id=$row['id'];
$profile=$row['profile'];
$father_name  = $row['father_name'];
$student_name = $row['student_name'];
$admission_number = $row['admission_number'];
$grade_id = $row['grade_id'];
$nic_number = $row['nic_number'];
$date_of_birth = $row['date_of_birth'];
$gender = $row['gender'];
$telephone_number = $row['telephone_number'];
$address = $row['address'];

$query = "INSERT INTO students_logs(id,profile,father_name,student_name,admission_number,grade_id,nic_number,date_of_birth,gender,telephone_number,address) VALUES('$id','$profile','$father_name','$student_name','$admission_number','$grade_id','$nic_number','$date_of_birth','$gender','$telephone_number','$address');";
$results = mysqli_query($conn, $query);
//insertation ends****


$query = "UPDATE students SET deleted_at=NOW() WHERE id='$id'";
$result = mysqli_query($conn,$query);

if($result){
	echo "query executed successfully...";
	header("Location:../index.php?section=student&page=index");
}
else{
	echo ("query not executed..").mysqli_error($conn);
}

?>
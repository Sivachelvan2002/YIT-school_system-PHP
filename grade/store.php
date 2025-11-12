<?php
if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	//$id = $_POST['id'];
	$grade_name  =$_POST['grade_name'];
	$grade_group = $_POST['grade_group'];
	$grade_color = $_POST['grade_color'];
	$grade_order = $_POST['grade_order'];
	require_once('../config.php');
	//check grade name already exist or not
	$checkQuery_name = "SELECT * FROM grades WHERE grade_name = '$grade_name'";
	$checkResult_name = mysqli_query($conn, $checkQuery_name);

	if (mysqli_num_rows($checkResult_name) > 0) {
		echo "<script>
            alert('Grade Name already exists!');
            window.history.back();
            </script>";
		exit();
	}
	
	$query = "INSERT INTO grades(grade_name,grade_group,grade_color,grade_order) VALUES('$grade_name','$grade_group','$grade_color','$grade_order');";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	header("Location:../index.php?section=grade&page=index");
}

?>
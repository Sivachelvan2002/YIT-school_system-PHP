<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//$id = $_POST['id'];
	$grade_name  = $_POST['grade_name'];
	$grade_group = $_POST['grade_group'];
	$grade_color = $_POST['grade_color'];
	$grade_order = $_POST['grade_order'];
	require_once('../config.php');
	//check grade name already exist or not
	$checkQuery = "SELECT grade_name,grade_order FROM grades";
	$checkResult = mysqli_query($conn, $checkQuery);
	$grade_names = [];
	$grade_orders = [];
	while ($row = mysqli_fetch_assoc($checkResult)) {
		$grade_names[] = $row['grade_name'];
		$grade_orders[] = $row['grade_order'];
	}

	if (in_array($grade_name, $grade_names) && in_array($grade_order, $grade_orders)) {
		echo "<script>
            alert('Grade Name and Grade order already exists!');
            window.history.back();
            </script>";
		exit();
	} elseif (in_array($grade_name, $grade_names)) {
		echo "<script>
            alert('Grade Name already exists!');
            window.history.back();
            </script>";
		exit();
	} elseif (in_array($grade_order, $grade_orders)) {
		echo "<script>
            alert('Grade Order already exists!');
            window.history.back();
            </script>";
		exit();
	} else {
		$query = "INSERT INTO grades(grade_name,grade_group,grade_color,grade_order) VALUES('$grade_name','$grade_group','$grade_color','$grade_order');";
		$results = mysqli_query($conn, $query);

		if (!$results) {
			echo mysqli_error($conn);
		}
		header("Location:../index.php?section=grade&page=index");
	}
}

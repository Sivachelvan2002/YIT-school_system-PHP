<?php
$id = $_GET['id'];
$path=$_GET['path'];

require_once('../config.php');
if (file_exists($path)) {
	unlink($path);
	$query = "UPDATE students SET profile=null WHERE id='$id'";
	$result = mysqli_query($conn, $query);

	if ($result) {
		//               echo "query executed successfully...";
		header("Location: ../index.php?section=student&page=edit&id=$id");
	} else {
		echo ("query not executed..") . mysqli_error($conn);
	}
}

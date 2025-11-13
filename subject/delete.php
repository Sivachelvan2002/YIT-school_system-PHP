<?php
$id = $_GET['id'];

require_once('../config.php');

$query = "	DELETE FROM subjects WHERE id='$id'";
$result = mysqli_query($conn,$query);

if($result){
	echo "query executed successfully...";
	header("Location:../index.php?section=subject&page=index");
}
else{
	echo ("query not executed..").mysqli_error($conn);
}

?>
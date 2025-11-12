<?php
$id = $_GET['id'];

require_once('../config.php');

$query = "UPDATE students SET profile=null WHERE id='$id'";
$result = mysqli_query($conn,$query);

if($result){
	echo "query executed successfully...";
	header("Location: edit.php?id=". $id);
}
else{
	echo ("query not executed..").mysqli_error($conn);
}

?>

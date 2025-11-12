<?php

$id = $_GET['id'];

$query = "DELETE FROM grades WHERE grade_id='$id';";
$result = mysqli_query($conn,$query);

if($result){
	echo "query executed successfully...";
	header("Location:?section=grade&page=index");
}
else{
	echo ("query not executed..").mysqli_error($conn);
}

?>
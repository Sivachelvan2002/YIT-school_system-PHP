<?php
if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	$id = $_POST['id'];
	$subject_name  =$_POST['subject_name'];
	$subject_index = $_POST['subject_index'];
	$subject_order = $_POST['subject_order'];
	$subject_color = $_POST['subject_color'];
	$subject_number = $_POST['subject_number'];
	
	require_once('../config.php');

	$checkQuery="SELECT subject_name,subject_index FROM subjects WHERE id!=$id";
	$checkResult=mysqli_query($conn,$checkQuery);
	$subject_names=[];
	$subject_indexes=[];
	while($row=mysqli_fetch_assoc($checkResult)){
		$subject_names[]=$row['subject_name'];
		$subject_indexes[]=$row['subject_index'];
	}
	if(in_array($subject_name,$subject_names) && in_array($subject_index,$subject_indexes)){
		echo "<script>
		alert('Subject Name and Subject Index already exists');
		window.history.back();
		</script>";
		exit();
	}elseif(in_array($subject_name,$subject_names)){
		echo "<script>
		alert('Subject Name already exists');
		window.history.back();
		<script/>";
		exit();
	}elseif(in_array($subject_index,$subject_indexes)){
		echo "<script>
		alert('Subject index already exists');
		window.history.back();
		<script/>";
		exit();
	}
	else{

	$query = "UPDATE subjects SET subject_name = '$subject_name' ,subject_index = '$subject_index',subject_order = '$subject_order',subject_color = '$subject_color',subject_number='$subject_number' WHERE id ='$id'; ";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	header("Location: ../index.php?section=subject&page=index");
	
}
}
?>
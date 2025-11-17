<?php
if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	$id = $_POST['id'];
	$subject_name  =$_POST['subject_name'];
	$subject_index = $_POST['subject_index'];
	$subject_order = $_POST['subject_order'];
	$subject_color = $_POST['subject_color'];
	$subject_number = $_POST['subject_number'];
	
	require_once('../config.php');
	//check subject name already exist or not
	$checkQuery_name = "SELECT * FROM subjects WHERE subject_name = '$subject_name'";
	$checkResult_name = mysqli_query($conn, $checkQuery_name);

	if (mysqli_num_rows($checkResult_name) > 0) {
		echo "<script>
            alert('Subject Index already exists!');
            window.history.back();
            </script>";
		exit();
	}
	
	//check subject index already exist or not
	$checkQuery = "SELECT subject_index,subject_name FROM subjects";
	$checkResult = mysqli_query($conn, $checkQuery);
	$subject_names=[];
	$subject_indexes=[];
	while($row=mysqli_fetch_assoc($checkResult)){
		$subject_names[]=$row['subject_name'];
		$subject_index[]=$row['subject_index'];
	}
	if(in_array($subject_name,$subject_names) && in_array($subject_index,$subject_indexes)){
		echo "<script>
            alert('Subject Name and Subject index already exists!');
            window.history.back();
            </script>";
		exit();
	}
	elseif(in_array($subject_name,$subject_names)){
		echo "<script>
            alert('subject name already exists!');
            window.history.back();
            </script>";
		exit();
	}
	elseif(in_array($subject_index,$subject_indexes)){
		echo "<script>
            alert('Subject index already exists!');
            window.history.back();
            </script>";
		exit();
	}
	else{

	

	
	$query = "INSERT INTO subjects(id,subject_name,subject_index,subject_order,subject_color,subject_number) VALUES('$id','$subject_name','$subject_index','$subject_order','$subject_color','$subject_number');";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	header("Location: ../index.php?section=subject&page=index");
}
}
?>
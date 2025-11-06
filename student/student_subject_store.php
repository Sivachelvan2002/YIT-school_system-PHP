<?php //include('../auth/session.php'); ?>
<?php
include('../config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];
    $subjects = $_POST["subjects"];
    $query= "DELETE FROM student_subject WHERE student_id=$student_id";
    $results = mysqli_query($conn,$query);
    foreach ($subjects as $subject) {
        $query = "insert into student_subject (student_id, subject_id) values ('$student_id','$subject')";
        $results = mysqli_query($conn, $query);
        if (!$results) {
            echo mysqli_error($conn);
        }
    }
    header("location:addsubject.php?id=$student_id");
	
}
?>
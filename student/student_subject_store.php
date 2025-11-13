<?php
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_POST["student_id"];

    // Handle Delete button from Assigned Subjects
    if (isset($_POST['delete']) && isset($_POST['delete_subject_id'])) {
        $subject_id = $_POST['delete_subject_id'];
        mysqli_query($conn, "DELETE FROM student_subject WHERE student_id='$student_id' AND subject_id='$subject_id'");
        header("location:addsubject.php?id=$student_id"); // same folder redirect
        exit;
    }

    // Existing checkbox submission
    $subjects = isset($_POST["subjects"]) ? $_POST["subjects"] : [];

    // Delete all previous assignments to match checked boxes
    mysqli_query($conn, "DELETE FROM student_subject WHERE student_id=$student_id");

    foreach ($subjects as $subject) {
        $query = "INSERT INTO student_subject (student_id, subject_id) VALUES ('$student_id','$subject')";
        $results = mysqli_query($conn, $query);
        if (!$results) {
            echo mysqli_error($conn);
        }
    }

    header("location:addsubject.php?id=$student_id"); // same folder redirect
    exit;
}
?>

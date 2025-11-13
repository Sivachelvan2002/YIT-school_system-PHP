<?php //include('../auth/session.php');
require_once('../config.php'); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grade_id = $_POST["grade_id"];
    $subjects = $_POST["subjects"];
    //$query= "DELETE FROM grade_subject WHERE grade_id=$grade_id";
    //$results = mysqli_query($conn,$query);

    //single delete from Assigned Subjects
    if (isset($_POST['delete']) && isset($_POST['delete_subject_id'])) {
        $subject_id = $_POST['delete_subject_id'];
        $single_delete_query= "DELETE FROM grade_subject WHERE grade_id='$grade_id' AND subject_id='$subject_id'";
        mysqli_query($conn,$single_delete_query);
        header("Location: ../index.php?section=grade&page=addsubject&id=$grade_id");
        exit;
    }
    $delete_query="DELETE FROM grade_subject WHERE grade_id='$grade_id'";
    mysqli_query($conn,$delete_query);

    foreach ($subjects as $subject) {
        $query = "insert into grade_subject (grade_id, subject_id) values ('$grade_id','$subject')";
        $results = mysqli_query($conn, $query);
        if (!$results) {
            echo mysqli_error($conn);
        }
    }
    header("location: ../index.php?section=grade&page=addsubject&id=$grade_id");
}
?>
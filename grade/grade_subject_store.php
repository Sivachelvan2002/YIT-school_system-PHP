<?php //include('../auth/session.php'); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grade_id = $_POST["grade_id"];
    $subjects = $_POST["subjects"];
    $query= "DELETE FROM grade_subject WHERE grade_id=$grade_id";
    $results = mysqli_query($conn,$query);
    foreach ($subjects as $subject) {
        $query = "insert into grade_subject (grade_id, subject_id) values ('$grade_id','$subject')";
        $results = mysqli_query($conn, $query);
        if (!$results) {
            echo mysqli_error($conn);
        }
    }
    header("location: ?section=grade&page=addsubject&id=$grade_id");
}
?>
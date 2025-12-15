    <?php
    $id = $_GET["id"];
    //include('../auth/auth_session.php');
    //fetch grade details from grade
    $query = "SELECT * FROM grades WHERE grade_id='$id'";
    $results = mysqli_query($conn, $query);
    if (!$results) {
        echo mysqli_error($conn);
        exit();
    }
    $row = mysqli_fetch_assoc($results);

    $subject_ids = [];
    //fetch details from grade_subject table
    $query2 = "SELECT * FROM grade_subject WHERE grade_id=$id";
    $results2 = mysqli_query($conn, $query2);
    while ($row2 = mysqli_fetch_assoc($results2)) {
        $subject_ids[] = $row2['subject_id'];
    }
    //fetch id,subject_name from subject
    $query1 = "SELECT id, subject_name FROM subjects";
    $results1 = mysqli_query($conn, $query1);
    if (!$results1) {
        echo mysqli_error($conn);
        exit;
    }
    $subjects = [];
    //assign every row of id,subject_name to $subjects[]
    while ($row1 = mysqli_fetch_assoc($results1)) {
        $subjects[] = $row1;
    }
    ?>
<style>
    .add-subject {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<h4 class="text-center mb-4 bg-secondary p-2">Add Subjects</h4>
<div class="add-subject">
    <table class="table table-dark table-hover" style="width: 24rem;">
        <tr>
            <th colspan="2" style="text-align:center;">
                <h4>Grade Details</h4>
            </th>
        </tr>
        <th>Grade Name</th>
        <td><?php echo $row['grade_name']; ?></td>
        </tr>
        <tr>
            <th>Grade Group</th>
            <td><?php echo $row["grade_group"]; ?></td>
        </tr>
        <tr>
            <th>Grade Color</th>
            <td><input type="color" value="<?php echo $row["grade_color"]; ?>"></td>
        </tr>
        <tr>
            <th>Grade Order</th>
            <td><?php echo $row["grade_order"]; ?></td>
        </tr>
        <tr>
            <th>Assigned Subjects</th>
            <td>
                <?php
                if (!empty($subject_ids)) {
                    foreach ($subjects as $subject) {
                        if (in_array($subject['id'], $subject_ids)) { ?>
                            <form action="grade/grade-subject-store.php" method="POST" style="display:inline;">
                                <input type="hidden" name="grade_id" value="<?php echo $id; ?>">
                                <input type="hidden" name="delete_subject_id" value="<?php echo $subject['id']; ?>">
                                <?php echo $subject['subject_name']; ?>
                                <input type="submit" name="delete" value="Delete" class="btn btn-outline-danger">
                            </form><br>
                <?php }
                    }
                } else {
                    echo "No subjects assigned.";
                }
                ?>

            </td>
        </tr>
        <form action="grade/grade-subject-store.php" method="POST">
            <input type="hidden" name="grade_id" value="<?php echo $id; ?>">
            <tr>
                <th>Subjects</th>
                <td>
                    <?php
                    foreach ($subjects as $subject) { ?>

                        <input type='checkbox' name='subjects[]'
                            value="<?php echo $subject['id'] ?>"
                            <?php if (in_array($subject['id'], $subject_ids)) {
                                echo "checked";
                            } ?>>
                        <?php echo $subject['subject_name'] ?><br>
                    <?php }

                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <a href="?section=grade&page=index" class="btn btn-outline-info">Back</a>
                    <input type="submit" value="Submit" class="btn btn-outline-success">
                </td>
            </tr>
        </form>

    </table>
    </div>
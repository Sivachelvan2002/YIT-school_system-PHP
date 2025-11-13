
    <?php
    $id = $_GET["id"];
    //include('../config.php');

    // Fetch Student details
    $query = "SELECT * FROM students WHERE id='$id'";
    $results = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($results);

    // Fetch all subjects
    $query1 = "SELECT id, subject_name FROM subjects";
    $results1 = mysqli_query($conn, $query1);
    $subjects = [];
    while ($row1 = mysqli_fetch_assoc($results1)) {
        $subjects[] = $row1;
    }

    // Fetch assigned subjects
    $query2 = "SELECT subject_id FROM student_subject WHERE student_id = $id";
    $results2 = mysqli_query($conn, $query2);
    $results2_array = [];
    while ($row2 = mysqli_fetch_assoc($results2)) {
        $results2_array[] = $row2['subject_id'];
    }
    ?>

    <table border="1">
        <tr>
            <th colspan="2" style="text-align:center;">
                <h1>Student Details</h1>
            </th>
        </tr>
        <tr>
            <th>Father Name</th>
            <td><?php echo $row['father_name']; ?></td>
        </tr>
        <tr>
            <th>Student Name</th>
            <td><?php echo $row["student_name"]; ?></td>
        </tr>
        <tr>
            <th>Addmission No</th>
            <td><?php echo $row["admission_number"]; ?></td>
        </tr>
        <tr>
            <th>Grade ID</th>
            <td><?php echo $row["grade_id"]; ?></td>
        </tr>
        <tr>
            <th>Nic</th>
            <td><?php echo $row["nic_number"]; ?></td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td><?php echo $row["date_of_birth"]; ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $row["gender"]; ?></td>
        </tr>
        <tr>
            <th>Telephone Number</th>
            <td><?php echo $row["telephone_number"]; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $row["address"]; ?></td>
        </tr>
        <tr>
            <th>Assigned Subjects</th>
            <td>
                <?php
                if (!empty($results2_array)) {
                    foreach ($subjects as $subject) {
                        if (in_array($subject['id'], $results2_array)) { ?>
                            <form action="student/student_subject_store.php" method="POST" style="display:inline;">
                                <input type="hidden" name="student_id" value="<?php echo $id; ?>">
                                <input type="hidden" name="delete_subject_id" value="<?php echo $subject['id']; ?>">
                                <?php echo $subject['subject_name']; ?>
                                <button type="submit" name="delete" class="delete-btn">Delete</button>
                            </form><br>
                <?php }
                    }
                } else {
                    echo "No subjects assigned.";
                }
                ?>
            </td>
        </tr>

        <form action="student/student_subject_store.php" method="POST">
            <input type="hidden" name="student_id" value="<?php echo $id; ?>">
            <tr>
                <th>Subjects</th>
                <td>
                    <?php
                    foreach ($subjects as $subject) { ?>
                        <input type='checkbox' name='subjects[]'
                               value="<?php echo $subject['id'] ?>"
                               <?php if (in_array($subject['id'], $results2_array)) echo "checked"; ?>>
                        <?php echo $subject['subject_name'] ?><br>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </form>

    </table>

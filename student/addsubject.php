<html>
<head>
<style>
	.button{
		background-color: #6e3e70;
        color: #E7E7E7;
        font-size: 2em;
        font-weight: 600;
        letter-spacing: 1px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
	}
	table{
		border-width:2px;
		border-style:solid;
		background-color:pink;
		text-align:center;
	}
	body {
            font-family: "Times New Roman", Times, serif;;
            background-color:#CBD99B ;
            color: #2F3542;
        }

</style>
</head>
<body>
    <?php
	//
    $id = $_GET["id"];
    //include('../auth/auth_session.php');
    include('../config.php');
    $query = "SELECT * FROM student where id='$id'";
    $results = mysqli_query($conn, $query);
    if (!$results) {
        echo mysqli_error($conn);
    }
    $row = mysqli_fetch_array($results);
    $query1 = "SELECT id, subject_name FROM subject";
    $results1 = mysqli_query($conn, $query1);
    if (!$results1) {
        echo mysqli_error($conn);
        exit;
    }
    $subjects = [];
    while ($row1 = mysqli_fetch_assoc($results1)) {
        $subjects[] = $row1;
    }
    ?>
    <table border="1">
        <tr>
            <th colspan="2" style="text-align:center;">
                <h1>Student Details</h1>
            </th>
        </tr>
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
            <?php
            $query2 = "SELECT subject_id FROM student_subject WHERE student_id = $id";
            $results2 = mysqli_query($conn, $query2);
            while($row2=mysqli_fetch_assoc($results2)){
                
                $results2_array[]=$row2['subject_id'];
            }
            ?>
        </tr>
        <tr>
            <th>Assigned Subjects</th>
            <td>
                <?php
                if (!empty($results2_array)) {
                    foreach ($subjects as $subject) {
                        if (in_array($subject['id'], $results2_array)) {
                            echo $subject['subject_name'] . "<br>";
                        }
                    }
                } else {
                    echo "No subjects assigned.";
                }
                ?>
            </td>
        </tr>
        <form action="student_subject_store.php" method="POST">
            <input type="hidden" name="student_id" value="<?php echo $id; ?>">
            <tr>
                <th>Subjects</th>
                <td>
                    <?php
                    foreach ($subjects as $subject) {
                        echo "<label><input type='checkbox' name='subjects[]' value='{$subject['id']}'> {$subject['subject_name']}</label><br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </form>
		
    </table>
</body>
</html>
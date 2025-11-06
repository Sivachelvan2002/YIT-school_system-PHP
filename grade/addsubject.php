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
	 require_once('../config.php');
    $id = $_GET["id"];
    //include('../auth/auth_session.php');
   
    $query = "SELECT * FROM grade WHERE grade_id='$id'";
    $results = mysqli_query($conn, $query);
    if (!$results) {
         echo mysqli_error($conn);
		 exit();
    }
    $row = mysqli_fetch_assoc($results);
	
	$subject_ids=[];
	$query2="SELECT * FROM grade_subject WHERE grade_id=$id";
	$results2=mysqli_query($conn,$query2);
	while($row2=mysqli_fetch_assoc($results2)){
		$subject_ids[]= $row2['subject_id'];
		
	}
	
    
	
    ?>
    <table border="1">
        <tr>
            <th colspan="2" style="text-align:center;">
                <h1>Grade Details</h1>
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
            <td><?php echo $row["grade_color"]; ?></td>
        </tr>
        <tr>
            <th>Grade Order</th>
            <td><?php echo $row["grade_order"]; ?></td>
        </tr>
        <tr>
            <th>Assigned Subjects</th>
            <td>
                <?php
					$subjects = [];
					foreach($subject_ids as $subject){
					$query1 = "SELECT id, subject_name FROM subject WHERE id=$subject";
					$results1 = mysqli_query($conn, $query1);
					$row=mysqli_fetch_assoc($results1);
					echo $row['subject_name']."<br/>";
					
		
				}
                
                ?>
            </td>
        </tr>
        <form action="grade_subject_store.php" method="POST">
            <input type="hidden" name="grade_id" value="<?php echo $id; ?>">
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
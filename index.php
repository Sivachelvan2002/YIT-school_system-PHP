<?php require_once('auth/session.php');
require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>School-System</title>
    <style>
        
    </style>

</head>

<body>
    <table width="100%" height="100%" class="table table-bordered border-primary">
        <tr height="100" class="bg-info">
            <td colspan="2" class="fs-1 text-center text-light">School Management system</td>
        </tr>
        <tr height="400">
            <td width="15%" class="">
                <ul class="list-group mt-">
                    <li class="list-group-item"><a class=" " href="?section=subject&page=index">Subject</a></li>
                    <li class="list-group-item"><a class="" href="?section=grade&page=index">Grade</a></li>
                    <li class="list-group-item"><a class=" " href="?section=student&page=index">Student</a></li>
                    <li class="list-group-item"><a class="" href="?section=auth&page=logout">Logout</a></li>
                </ul>
               
            </td>
            <td width="85%" style="background-color: #f6f2f7ff;">
                <?php
                //get folder name or assign default foldername
                if (isset($_GET["section"])) {
                    $sec = $_GET["section"];
                } else {
                    $sec = "student";
                }
                //get file name or assign default filename 
                if (isset($_GET["page"])) {
                    $p = $_GET["page"];
                } else {
                    $p = "index";
                }
                //assign foldername + filename to $path
                $path = $sec . "/" . $p . ".php";
                //check $path la kudutha name la ethum irukka endu
                if (file_exists($path)) {
                    include($path);
                } else {
                    echo "<h1>404 error</h1>";
                }

                ?>
            </td>
        </tr>
        <tr height="100" class="bg-info">
            <td colspan="2" class="fs-1 text-center text-light">Footer</td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
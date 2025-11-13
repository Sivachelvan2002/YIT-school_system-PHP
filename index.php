<?php require_once('auth/session.php'); 
require_once('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School-System</title>
    <style>
        td[colspan="2"]{
            
        }
   
    </style>
</head>
<body>
    <table width="100%" height="100%">
        <tr height="100" style="background-color: #ccc;">
            <td colspan="2" >School Management system</td>
        </tr>
        <tr height="400">
            <td width="15%" style="background-color: #62749eff;" >
                <ul>
                    <li><a href="?section=student&page=index">Student</a></li>
                    <li><a href="?section=subject&page=index">Subject</a></li>
                    <li><a href="?section=grade&page=index">Grade</a></li>
                </ul>
            </td>
            <td width="85%" style="background-color: #f6f2f7ff;">
                <?php
                //get folder name or assign default foldername
                if(isset($_GET["section"])){
                    $sec=$_GET["section"];
                }else{
                    $sec="student";
                }
                //get file name or assign default filename 
                if(isset($_GET["page"])){
                    $p=$_GET["page"];
                } else{
                    $p="index";
                }
                //assign foldername + filename to $path
                $path=$sec."/".$p.".php";
                //check $path la kudutha name la ethum irukka endu
                if(file_exists($path)){
                    include($path);
                }else{
                    echo "<h1>404 error</h1>";
                }
                    
                ?>
            </td>
        </tr>
        <tr height="100" style="background-color: #ccc;">
            <td colspan="2" >Footer</td>
        </tr>
    </table>
</body>
</html>











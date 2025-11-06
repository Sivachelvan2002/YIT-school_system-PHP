<?php require_once('auth/session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School-System</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;;
            margin: 0;
            padding: 0;
            
            color: #2F3542;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            height: 100vh;
        }
        td {
            text-align: center;
            vertical-align: middle;
            padding: 10px;
        }
        td[colspan="2"] {
            background-color: #6e3e70;
            color: #E7E7E7;
            font-size: 3em;
            font-weight: 800;
            letter-spacing: 1px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
			
			
			
        }
        .sidebar {
            background-color: #E9ECEF;
            border-right: 2px solid #D0D7DE;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .sidebar li {
            border: 2;
            margin: 10px 0;
        }
        .sidebar a {
            border: 2;
            color: black;
            font-size: 1.1em;
            display: block;
            padding: 10px 1px;
            border-radius: 20px;
			background-color: #6e3e70;
			
        }
        .sidebar a:hover {
            background-color: #11224E;
            color: #FFFFFF;
        }
        iframe {
            background-color: #FFFFFF;
            box-shadow: 0 3px 14px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            width: 90%;
            height: 100%;
            transition: box-shadow 0.3s ease;
        }
        iframe:hover {
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.2);
        }
        .footer td {
            background-color: #6e3e70;
            color: #ccc;
            font-size: 1em;
            letter-spacing: 0.5px;
            padding: 12px;
        }
        table, td {
            border: 2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td colspan="2" height="15%" width="100%" ><b>School Management System</b><button><a href="auth/logout.php" target="_self">Logout</a></button></td>
			
			
        </tr>
        <tr class="sidebar">
            <td width="20%" height="70%">
                <ul>
                    <li><a href="student" target="iframe_a">Student</a></li>
                    <li><a href="subject" target="iframe_a">Subject</a></li>
                    <li><a href="grade" target="iframe_a">Grade</a></li>
					
                </ul>
            </td>
            <td width="80%" >
                <iframe  src="./student/index.php" name="iframe_a" title="Iframe Example"></iframe>
            </td>
        </tr>
        <tr class="footer" width="100%">
            <td colspan="2" height="15%"></td>
			
        </tr>
    </table>
	
</body>
</html>











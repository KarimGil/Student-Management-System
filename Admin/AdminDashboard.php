<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Management System</title>
<link rel="stylesheet" type="text/css" href="../CSS Files/style.css" />
</head>

<body>


	<div class="title" align="center">
		<h1> Welcome To Admin Dashboard</h1>
        <a href="logout.php"><input type="submit" name="logout" value="Logout" class="logout_btn"></a>
    </div>
	
    <div class="dashboard" align="center">
    	<table>
        	<tr>
            	<td>1.</td>
                <td><a href="addStudent.php">Add Student</a></td>
            </tr>
            <tr>
            	<td>2.</td>
                <td><a href="updateStudent.php">Update Student</a></td>
            </tr>
            <tr>
            	<td>3.</td>
                <td><a href="deleteStudent.php">Delete Student</a></td>
            </tr>
        </table>
    </div>


</body>
</html>
<?php
session_start();
	if(isset($_SESSION['userid'])){
	
		echo"";
	
	}
	else{
		header('location:../login.php');
	
	}


?>
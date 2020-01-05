<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include("titlehead.php");

	session_start();
		if(isset($_SESSION['userid'])){
	
			echo"";
	
		}
		else{
			header('location:../login.php');
	
		}
?>
<div>
	<form method="post" action="addStudent.php" enctype="multipart/form-data">
		<table align="center" border="1" width="50%">
        	<tr>
            	<td>Roll No</td>
                <td><input type="text" name="rollno" placeholder="Enter Roll No" required="required" /></td>
            </tr>
            <tr>
            	<td>Full Name</td>
                <td><input type="text" name="name" placeholder="Enter Student Name" required="required" /></td>
            </tr>
            <tr>
            	<td>City</td>
                <td><input type="text" name="city" placeholder="Enter City" required="required"/></td>
            </tr>
            <tr>
            	<td>Contact Number</td>
                <td><input type="number" name="number" placeholder="Enter Contact Number" required="required"/></td>
            </tr>
            <tr>
            	<td>Enter Standard</td>
                <td><input type="text" name="standard" placeholder="Enter Standard" required="required"/></td>
            </tr>
            <tr>
            	<td>Upload Picture</td>
                <td><input type="file" name="image" value="UPLOAD IMAGE!" required="required"/></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="submit" name="submit" value="ADD STUDENT" style="width:100%"</td>
            </tr>

		</table>
	</form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
	include('../dbconnection.php');
	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$contact = $_POST['number'];
	$standard = $_POST['standard'];
	$imagename = $_FILES['image']['name'];
	$tempname = $_FILES['image']['tmp_name'];
	move_uploaded_file($tempname,"../Data Images/$imagename");
	$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `contact`, `standard`,`image`) VALUES ('$rollno','$name','$city','$contact','$standard','$imagename')";
	$run = mysqli_query($con,$qry);
	if($run)
	{
		?>
        <script>
        alert('Data Insterted Successfully');
        </script>
        <?php	
		}

	
	}

?>
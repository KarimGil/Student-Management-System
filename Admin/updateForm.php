<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("titlehead.php");
	  include("../dbconnection.php");
	  $sid = $_GET['sid'];
	  $sql = "SELECT * FROM `student` WHERE `id`='$sid'";
	  $run = mysqli_query($con,$sql);
	  $data = mysqli_fetch_assoc($run);

	session_start();
		if(isset($_SESSION['userid'])){
	
			echo"";
	
		}
		else{
			header('location:../login.php');
	
		}
?>
<body>
	<form method="post" action="updateForm.php" enctype="multipart/form-data">
		<table align="center" border="1" width="50%">
        	<tr>
            	<td>Roll No</td>
                <td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required="required" /></td>
            </tr>
            <tr>
            	<td>Full Name</td>
                <td><input type="text" name="name"  value=<?php echo $data['name']; ?> required="required" /></td>
            </tr>
            <tr>
            	<td>City</td>
                <td><input type="text" name="city"  value=<?php echo $data['city']; ?> required="required"/></td>
            </tr>
            <tr>
            	<td>Contact Number</td>
                <td><input type="number" name="number"  value=<?php echo $data['contact']; ?> required="required"/></td>
            </tr>
            <tr>
            	<td>Enter Standard</td>
                <td><input type="text" name="standard"  value=<?php echo $data['standard']; ?> required="required"/></td>
            </tr>
            <tr>
            	<td>Upload Picture</td>
                <td><input type="file" name="image" value="UPLOAD IMAGE!" required="required"/></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="submit" name="submit" value="UPDATE STUDENT" style="width:100%"</td>
            </tr>

		</table>
	</form>
</body>
</html>
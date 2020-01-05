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
<form action="updateStudent.php" method="post">
	<table align="center">
    	<tr>
    		<th>Enter Standard</th>
			<td><input type="text" name="standard"  placeholder="Enter Standard" required="required"/></td>
    	
    	
        	<th>Enter Name</th>
    		<td><input type="text" name="name"  placeholder="Enter Name" required="required"/></td>
            
        	<td><input type="submit" name="submit" value="Search"/></td>
        </tr>
    </table>
</form>
<table border="1" width="50%" align="center">
	<tr>
    	<th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Edit</th>
    </tr>    


<?php

if(isset($_POST['submit'])){
	include('../dbconnection.php');
	$standard = $_POST['standard'];
	$name = $_POST['name'];
	$qry = "SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
	$run= mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1){
		
		echo "<center><tr><th colspan = '5'>No Records Found</th></tr></center>";
		}
	else{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
		{
			$count++;
			?>
			<tr align="center">
                <td><?php echo $count; ?></td>
                <td><img src="../Data Images/<?php echo $data['image']; ?>" style="max-width:100px"/></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['rollno']; ?></td>
                <td><a href="updateForm.php?sid=<?php echo $data['id'];?>">Edit</a></td>
    		</tr>    
			
			<?php
			}
		
		
		}
	
	}

?>
</table>

</body>
</html>
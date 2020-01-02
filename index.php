<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Management System</title>
</head>

<body>
<h1 align="center">Welcome To Student Management System</h1>
<center>
<a href="login.php"><input type="button" name="button" value="Admin LOGIN!"  /></a>
<h3>Student Information</h3>
</center>
<form>
<table width="25%" align="center" border="1">

<tr>
<td align="left">Select Standard </td>
<td> 
<select name="std" style="width:100%">
<option value="1">Grade 7</option>
<option value="2">Grade 8</option>
<option value="3">Grade 9</option>
<option value="4">Matric</option>
<option value="5">Intermediate-(Part I)</option>
<option value="6">Intermediate-(Part II)</option>


</select>
</td>
</tr>
<tr>
<td align="left">Enter Roll No  </td>
<td><input type="text" name="rollno" required="required" style="width:98%"/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="SHOW DETAILS" style="width:100%"/></td>
</tr>
</table>
</form>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['userid'])){
	header('location:loggedIn.html');
	exit;
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="CSS Files/login.css" />
<link type="text/css" rel="stylesheet" href="CSS Files/bootstrap.css" />
<title>Admin Panel</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control" name="username" required="required">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" name="password" required="required"i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>





</body>
</html>
<?php
include('dbconnection.php');

if(isset($_POST['login'])){
	
	$username = $_POST['username'];
	$password =$_POST['password'];
	$qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	if($row <1){
		?>
		<script>
        
		alert('Username/Password is incorrect');
        window.open('login.php','_self');
        </script>
		<?php
		}
	else{
		
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		$_SESSION['userid']=$id;
		header('location:Admin/AdminDashboard.php');
		
		}
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>School</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/dicotha/School/c3efd83a/node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/dicotha/School/c3efd83a/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/dicotha/School/c3efd83a/css/fonts/BloggerSans/BloggerSans-Light.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS Files/index.css" />
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
	
</head>
<div class="anchorHome"  id="home"></div>
<body>
	

	<!-- main menu -->
	<header>
		<nav class="navbar navbar-expand-lg  bg-topSchool justify-content-between fixed-top">
		  <a class="navbar-brand navbar-brand-School" href="index.php">School Management System</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
		    <div class="navbar-nav menu-school">
		      <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="#blog">Blog</a>
		      <a class="nav-item nav-link" href="#student">Student Details</a>
		      <a class="nav-item nav-link" href="login.php">Admin LOGIN!</a>
		      
		    </div>
		  </div>
		</nav>
	</header>
	<!-- end menu -->






	<!-- content main -->
	<main>
		<!-- banner  -->
		<div class="bigschool ">
			<img class="img-fluid" src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/banner.png"/>
		</div>
		<!-- end banner -->

		<!-- blog -->
		<div class=" container-fluid postBlog" id="blog">
			<div class="row">
				<div class="title col ">
					Blog
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" style="padding-top: 15px">
					<img class="img-fluid" src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/square1.png">
					<div class="titlePost">
						Why to learn Arts?
					</div>
					<div class="resumePost float-left">
						Lorem ipsum dolor sit 
						amet, consectetur adip 
					</div>
					<div class="btnView float-sm-left float-md-right">
						<img src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/view.png" style="width: 100px;">
					</div>
				</div>
				<div class="col-md-3" style="padding-top: 15px">
					<img class="img-fluid" src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/square2.png">
					<div class="titlePost">
						Making a Team
					</div>
					<div class="resumePost float-left">
						Lorem ipsum dolor sit 
						amet, consectetur adip 
					</div>
					<div class="btnView float-sm-left float-md-right">
						<img src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/view.png" style="width: 100px;">
					</div>
				</div>
				<div class="col-md-3" style="padding-top: 15px">
					<img class="img-fluid" src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/square3.png">
					<div class="titlePost">
						Creating Your imagination
					</div>
					<div class="resumePost float-left">
						Lorem ipsum dolor sit 
						amet, consectetur adip 
					</div>
					<div class="btnView float-sm-left float-md-right">
						<img src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/view.png" style="width: 100px;">
					</div>
				</div>
				<div class="col-md-3" style="padding-top: 15px">
					<img class="img-fluid" src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/square4.png">
					<div class="titlePost">
						Back to School
					</div>
					<div class="resumePost float-left">
						Lorem ipsum dolor sit 
						amet, consectetur adip 
					</div>
					<div class="btnView float-sm-left float-md-right">
						<img src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/view.png" style="width: 100px;">
					</div>
				</div>
			</div>
		</div>
		<!-- end blog -->

<!--Start Student Information  -->
 <h3 class="title col" align="center" style="margin-top:50px" id="student">Student Information</h3>
</center>
<form>
	<table width="70%" height="100px" align="center" border="1">
		<tr>
			<td align="left" class="title1">Select Standard </td>
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
		<td align="left" class="title1 ">Enter Roll No  </td>
		<td><input type="text" name="rollno" required="required" style="width:100%"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="SHOW DETAILS" class="btn btn-outline" style="width:100%" style="color:#a5a5c3 !important"/></td>
	</tr>
	</table>
</form>
<!--End Student Information-->

		<!-- About -->
		<div class="container-fluid space bottomSpace" id="about">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col title">About</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="textAbout">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui <br>
								<br>
								<br>
								officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br>
								<br>
								Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem <br>
								<br>
								<br>
								ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.<br>
							</div>		
							<div class="signature">
								<img src="https://cdn.rawgit.com/dicotha/School/c3efd83a/img/signature.png"/>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col">
							<img src="https://cdn.rawgit.com/dicotha/School/master/img/tree.png" class="img-fluid" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end about -->

	</main>
	<!-- end main -->

	
	
</body>
</html>
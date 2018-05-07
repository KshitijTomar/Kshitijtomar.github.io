<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin-Login_Page</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/favicon.ico">

	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="starter-template.css" rel="stylesheet">

	<style type="text/css">
	body{
		background-color: #f1f1f1;
		min-height:100%;
	}
	.navbar_top_shadow{
		border-radius: 0;
		box-shadow: 0 10px 20px black;
		padding: 20px 0;
		font-size: 18px;
	}
	.navbar-inverse .navbar-brand{
		color:#f1f1f1;
		font-size: 25px;
	}
	.hero{
		background-image: url("http://www.anawalls.com/repic/image.php?src=http://www.anawalls.com/images/abstract/spots-reflections-soft-light.jpg&h=800&w=1280");
		background-repeat: none;
		background-size: cover;
		margin-top: -30px;
	}
	.hero_title{
		margin: 150px 0 ;
		color:#101010;
		font-family: 'Josefin Sans', sans-serif;
	}

	.logo {
		padding: 15px 0;
		align-content: center;
		/*margin-left: 130px;*/
		font-size: 25px;
		color: #aaaaaa;
		font-weight: bold;
	}
	.block {
		background-color: white;
		border-style: solid;
		border-color: lightgrey;
		border-radius: 5px;
		padding: 20px;
		margin: 80px 0px;
		/*width: 400px !important;*/
		box-sizing: border-box;
	}

	.label {
		font-size: large;
		font-weight: 500;
		color: #666;
	}
	.footer_note{
		margin:20px;
	}
	.footer_note a{
		font-weight: 700;
		text-decoration: none;
	}
	.img_silhouette{
		background-color: #111;
		border-radius: 100px;
	}
	.img_silhouette img{
		opacity: 0.9;
		padding: 20px;
		border: 5px 5px solid #111;
		border-radius: 100px;
	}
	.footer_note{
		/*margin:20px;*/
	}
	.footer_note a{
		font-weight: 700;
		text-decoration: none;
	}
</style>

</head>
<body>
	<!-- <nav class="navbar navbar-inverse navbar-fixed-top"> -->
		<nav class="navbar navbar-inverse navbar_top_shadow">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Personality Prediction System</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
				<!-- <ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul> -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="user_login.html">User Login</a></li>
					<li><a href="admin_login.html">Admin Login</a></li>
					<!-- <li><a href="#">Admin Login</a></li> -->
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li> -->
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	
	<div class="container">
		<div class="row">
			<div class="col-12 img_silhouette">
				<img src="img/Silhouettes.png" width="100%">
			</div>
		</div>
	</div>






	
	<div class="container">
		<div class="row content_section">
			<form action="upload_register_user.php" id="upload_refgister_user" method="POST" role="form">
				<br><br>
				<legend>Register</legend>

				<div class="col-md-6">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" id="u_name" placeholder="User Name" name="u_name" required="required">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">E-mail ID:</label>
						<input type="text" class="form-control" id="u_email" placeholder="E-mail ID" name="u_email" required="required">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Mobile Number:</label>
						<input type="Number" class="form-control" id="u_number" placeholder="Mobile Number" name="u_number" required="required">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" class="form-control" id="u_username" placeholder="Username" name="u_username" required="required">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Password:</label>
						<input type="text" class="form-control" id="u_password" placeholder="Password" name="u_password" required="required">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="">Resume:</label>
						<input type="file" id="u_resume" name="u_resume" disabled="disabled"><br>
					</div>
				</div>

				<div class="col-md-12 text-center">
					<button type="submit" class="btn btn-primary">Submit</button>
					<br><br>&nbsp;
				</div>

				<br>
			</form>
		</div>
	</div>


















	<div class="container-fluid" style="background-color: #111; padding: 50px">
		<div class="row">
			<div class="footer_note">
				<a href="http://kshitijtomar.tech/project/other_projects/mani_sir_website/index.html">©NPDS Mani Group | All Rights Reserved</a>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

<script type="text/javascript">
	function login_trig(){
		if(document.getElementById('uname').value==="user"	&& document.getElementById('pswd').value==="user"){
			window.location.replace("panel_u.html");
			top.location="panel_u.html";
			window.location.assign("panel_u.html");
			window.location.href="panel_u.html"
			window.event.returnValue = false;
			window.location = "panel_u.html";
			setTimeout(function(){window.location.assign("panel_u.html");return false;},500);
		}
		else{
			document.getElementById('uname').value="";
			document.getElementById('pswd').value="";
		}
	}
</script>
</html>
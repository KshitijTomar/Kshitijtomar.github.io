<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- <link rel="icon" href="/favicon.ico"> -->

	<title>User-Panel</title>

	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
	body{
		background-color: #f1f1f1;
		min-height:100%;
	}
	.dynamic-content {
		display:none;
	}

	.navbar_top_shadow{
		border-radius: 0;
		box-shadow: 0 10px 20px black;
		padding: 5px 0;
		/*font-size: 18px;*/
	}
	.navbar-inverse .navbar-brand{
		color:#f1f1f1;
		font-size: 20px;
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
	.content_section{
		margin: 50px 0;
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
					<li><a href="content_u.php?dc=test">Test</a></li>
					<li><a href="content_u.php?dc=result">Result</a></li>
					<li><a href="user_login.html">Logout</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<!--<navbar>
		<ul>
			 <li><a href="#">Apptitude Questions</a></li>
			<li><a href="#">Personality Questions</a></li>
			<li><a href="#">Job Details</a>
				<ul>
					<li><a href="#">Add Job Details</a></li>
					<li><a href="#">Requirement Details</a></li>
					<li><a href="#">Prefered CV</a></li>
					<li><a href="#">Shortlisted CV</a></li>
				</ul>
			</li> 
			<li><a href="#">View Details</a>
				<ul>
					<li><a href="#">View Apptitude Questions</a></li>
					<li><a href="#">View Personality Questions</a></li>
					<li><a href="#">View Job Details</a></li>
				</ul>
			</li>
			<li><a href="#">Logout</a></li>
		</ul>
	</navbar>-->

	<div class="container">
		<div class="row">
			<div class="col-12 img_silhouette">
				<img src="img/Silhouettes.png" width="100%">
			</div>
		</div>
	</div>




	<!-- CONTENT -->
	<div id="default-content" class="dynamic-content text-center">
		<img src="http://almaoasislonghai.com/wp-content/uploads/2016/03/coming-soon.png" style="width: 50%;margin-top: 8px;">
	</div>	



	<div id="pg_personality_test" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<form action="save_personality_test_score.php" id="" method="POST" role="form">
					<legend>Probability Test</legend>

					<?php
					require "conn.php";	
					$number = 1;
					$query = "SELECT * FROM pps_personality_q;";
					$result = mysqli_query($conn,$query);
					while($data = mysqli_fetch_assoc($result)){
						echo '<div class="container-fluid">';
						echo '<div class="row">';
						echo '<div class="form-group">';
						echo '<div class="col-md-1">';
						echo '<b>'. $number++ .'</b>';
						echo '</div>';
						echo '<div class="col-md-11">';
						echo '<label for="">'. $data['personality_q_question']  .'</label>';
						echo '<div class="radio">';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="1" required="required">'. $data['personality_q_openness_to_experience'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="2" required="required">'. $data['personality_q_conscientiousness'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="3" required="required">'. $data['personality_q_extraversion'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="4" required="required">'. $data['personality_q_agreebieness'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="5" required="required">'. $data['personality_q_neuroticism'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
					}	
					?>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary">Submit</button>
						<br>
						<br>
					</div>
				</form>
			</div>
		</div>
	</div>



	<div id="pg_apptitude_test" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<form action="save_apptitude_test_score.php" id="" method="POST" role="form">
					<legend>English</legend>
					<hr>
					<?php
					require "conn.php";	
					$number = 1;
					$query = "SELECT * FROM pps_apptitude_q WHERE `apptitude_q_type` = 'English';";

					$result = mysqli_query($conn,$query);
					while($data = mysqli_fetch_assoc($result)){
						echo '<div class="container-fluid">';
						echo '<div class="row">';
						echo '<div class="form-group">';
						echo '<div class="col-md-1">';
						echo '<b>'. $number++ .'</b>';
						echo '</div>';
						echo '<div class="col-md-11">';
						echo '<label for="">'. $data['apptitude_q_question']  .'</label>';
						echo '<div class="radio">';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="1" required="required">'. $data['apptitude_q_option_1'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="2" required="required">'. $data['apptitude_q_option_2'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="3" required="required">'. $data['apptitude_q_option_3'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="4" required="required">'. $data['apptitude_q_option_4'] .'</label>&nbsp;&nbsp;&nbsp;';
						// echo '<label><input type="radio" name="optradio' . $data['id']  .'">'. $data['apptitude_q_answer'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
					}	
					?>
					<br>
					<br>

					<legend>Maths</legend>
					<hr>
					<?php
					require "conn.php";	
					$number = 1;
					$query = "SELECT * FROM pps_apptitude_q WHERE `apptitude_q_type` = 'Maths';";

					$result = mysqli_query($conn,$query);
					while($data = mysqli_fetch_assoc($result)){
						echo '<div class="container-fluid">';
						echo '<div class="row">';
						echo '<div class="form-group">';
						echo '<div class="col-md-1">';
						echo '<b>'. $number++ .'</b>';
						echo '</div>';
						echo '<div class="col-md-11">';
						echo '<label for="">'. $data['apptitude_q_question']  .'</label>';
						echo '<div class="radio">';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="1" required="required">'. $data['apptitude_q_option_1'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="2" required="required">'. $data['apptitude_q_option_2'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="3" required="required">'. $data['apptitude_q_option_3'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="' . $data['id']  .'" value="4" required="required">'. $data['apptitude_q_option_4'] .'</label>&nbsp;&nbsp;&nbsp;';
						// echo '<label><input type="radio" name="optradio' . $data['id']  .'">'. $data['apptitude_q_answer'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
					}	
					?>
					<br>
					<br>
					<legend>Programming</legend>
					<hr>
					<?php
					require "conn.php";	
					$number = 1;
					$query = "SELECT * FROM pps_apptitude_q WHERE `apptitude_q_type` = 'Programming';";

					$result = mysqli_query($conn,$query);
					while($data = mysqli_fetch_assoc($result)){
						echo '<div class="container-fluid">';
						echo '<div class="row">';
						echo '<div class="form-group">';
						echo '<div class="col-md-1">';
						echo '<b>'. $number++ .'</b>';
						echo '</div>';
						echo '<div class="col-md-11">';
						echo '<label for="">'. $data['apptitude_q_question']  .'</label>';
						echo '<div class="radio">';
						echo '<label><input type="radio" name="optradio' . $data['id']  .'">'. $data['apptitude_q_option_1'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="optradio' . $data['id']  .'">'. $data['apptitude_q_option_2'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="optradio' . $data['id']  .'">'. $data['apptitude_q_option_3'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '<label><input type="radio" name="optradio' . $data['id']  .'">'. $data['apptitude_q_option_4'] .'</label>&nbsp;&nbsp;&nbsp;';
						// echo '<label><input type="radio" name="optradio' . $data['id']  .'">'. $data['apptitude_q_answer'] .'</label>&nbsp;&nbsp;&nbsp;';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
					}	
					?>
					<button type="submit" value="submit" name="test_complete_submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>




	<div id="pg_result" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<?php
				if($_SESSION['view_test_result']){
					$_SESSION['view_test_result']=0;
					echo '<div class="col-md-6 ">';
					echo "<h3>Personality Scores : ". $_SESSION["perso_score"] ."</h3><br>";
					echo "<b>openness_to_experience : ". $_SESSION["perso_openness_to_experience"] ."</b> <br>";
					echo "<b>conscientiousness : ". $_SESSION["perso_conscientiousness"] ."</b> <br>";
					echo "<b>extraversion : ". $_SESSION["perso_extraversion"] ."</b> <br>";
					echo "<b>agreebieness : ". $_SESSION["perso_agreebieness"] ."</b> <br>";
					echo "<b>neuroticism : ". $_SESSION["perso_neuroticism"] ."</b> <br>";
					echo '</div>';


					echo '<div class="col-md-6 ">';
					echo "<h3>Apptitude Scores : ". $_SESSION["apti_score"] ."</h3><br>";

					echo "<b>English : ". $_SESSION["english_score"] ."/". $_SESSION["english_questions"] ."</b><br>";
					echo "<b>Maths : ". $_SESSION["maths_score"] ."/". $_SESSION["maths_questions"] ."</b><br>";
					echo "<b>Programming : ". $_SESSION["programming_score"] ."/". $_SESSION["programming_questions"] ."</b><br>";
					echo '</div>';
					echo '<div class="col-md-12 ">';

					require "conn.php";
					$query = "UPDATE `pps_user_details` 
					SET `personality_score` = " . $_SESSION["perso_score"] .
					", `apptitude_score` =" . $_SESSION["apti_score"] .
					" WHERE `pps_user_details`.`u_name` = " . $_SESSION["user_name"] . ";";

					if ($conn->query($query) === TRUE) 
						echo "<br><br><b>Score update successful !</b>";
					else
						echo "Error : " . $mysql_qry . "<br>" . $conn->error;
					$conn->close();
				}else{

					require "conn.php";	
					$query = "SELECT * FROM pps_user_details WHERE `pps_user_details`.`u_name` = " . $_SESSION["user_name"] . ";";
					$result = mysqli_query($conn,$query);
					$data = mysqli_fetch_assoc($result);
					$personality_score = $data['personality_score'];
					$apptitude_score = $data['apptitude_score'];

					echo '<div class="col-md-6 ">';
					echo "<h3>Personality Scores : ". $personality_score ."</h3><br>";
					echo '</div>';
					echo '<div class="col-md-6 ">';
					echo "<h3>Apptitude Scores : ". $apptitude_score ."</h3><br>";
					echo '</div>';
				}


				?>
			</div>
		</div>
	</div>
</div>
</div>







<div class="container-fluid" style="background-color: #111; padding: 50px">
	<div class="row">
		<div class="footer_note">
			<a href="http://npdsmanigroup.com">©NPDS Mani Group | All Rights Reserved</a>
		</div>
	</div>
</div>



<!-- Bootstrap core JavaScript================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>



<script type="text/javascript">
	// Parse the URL parameter
	function getParameterByName(name, url) {
		if (!url) url = window.location.href;
		name = name.replace(/[\[\]]/g, "\\$&");
		var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
		results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';
		return decodeURIComponent(results[2].replace(/\+/g, " "));
	}
	// Give the parameter a variable name
	var dynamicContent = getParameterByName('dc');

	$(document).ready(function() {
		if (dynamicContent == 'test') {
			$('#pg_personality_test').show();
		} 
		else if (dynamicContent == 'test2') {
			$('#pg_apptitude_test').show();
		}
		else if (dynamicContent == 'result') {
			$('#pg_result').show();
		} 
		else if (dynamicContent == 'pgrd') {
			$('#pg_requirement_details').show();
		} 
		else if (dynamicContent == 'pgpcv') {
			$('#pg_prefered_cv').show();
		} 
		else if (dynamicContent == 'pgscv') {
			$('#pg_shortlisted_cv').show();
		} 
		else if (dynamicContent == 'pg_view_aq') {
			$('#pg_view_apptitude_q').show();
		} 
		else if (dynamicContent == 'pg_view_pq') {
			$('#pg_view_personality_q').show();
		} 
		else if (dynamicContent == 'pg_view_jd') {
			$('#pg_view_job_details').show();
		} 
		else {
			$('#default-content').show();
		}
	});
</script>

</html>
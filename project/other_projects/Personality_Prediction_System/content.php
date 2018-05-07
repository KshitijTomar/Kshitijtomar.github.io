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

	<title>Admin-Apptitude Questions</title>

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
					<li><a href="content.php?dc=pgaq">Apptitude Questions</a></li>
					<li><a href="content.php?dc=pgpq">Personality Questions</a></li>
					<!-- <li><a href="#">Admin Login</a></li> -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Job Details <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="content.php?dc=pgajd">Add Job Details</a></li>
							<li><a href="content.php?dc=pgrd">Requirement Details</a></li>
							<li><a href="content.php?dc=pgpcv">Prefered CV</a></li>
							<li><a href="content.php?dc=pgscv">Shortlisted CV</a></li>
						<!-- <li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li> -->
						</ul>
					</li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View Details <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="content.php?dc=pg_view_aq">View Apptitude Questions</a></li>
							<li><a href="content.php?dc=pg_view_pq">View Personality Questions</a></li>
							<li><a href="content.php?dc=pg_view_jd">View Job Details</a></li>
						<!-- <li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li> -->
						</ul>
					</li>


					<li><a href="admin_login.html">Logout</a></li>
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

	
	<div id="pg_Apptitude_Questions" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<form action="upload_apptitude_q.php" id="add_apptitude_q" method="POST" role="form">
					<legend>Apptitude Questions</legend>

					<div class="form-group">
						<label for="">Type</label>
						<select name="apptitude_q_type" class="form-control" style="width: 30%;">		
							<option value="English">English</option>
							<option value="Maths">Maths</option>
							<option value="Programming">Programming</option>
						</select>
						<!-- <input type="text" class="form-control" id="" placeholder="Input field"> -->
					</div>
					<div class="form-group">
						<label for="">Question</label>
						<input type="text" class="form-control" id="" placeholder="Question" name="apptitude_q_question">
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Option 1:</label>
							<input type="text" class="form-control" id="" placeholder="Option 1" name="apptitude_q_option_1">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Option 2:</label>
							<input type="text" class="form-control" id="" placeholder="Option 2" name="apptitude_q_option_2">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Option 3:</label>
							<input type="text" class="form-control" id="" placeholder="Option 3" name="apptitude_q_option_3">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Option 4:</label>
							<input type="text" class="form-control" id="" placeholder="Option 4" name="apptitude_q_option_4">
						</div>
					</div>
					<div class="form-group">
						<label for="">Answer:</label><br>
						<input type="radio" name="apptitude_q_answer" value="1" required="required">Option 1&nbsp;&nbsp;
						<input type="radio" name="apptitude_q_answer" value="2" required="required">Option 2&nbsp;&nbsp;
						<input type="radio" name="apptitude_q_answer" value="3" required="required">Option 3&nbsp;&nbsp;
						<input type="radio" name="apptitude_q_answer" value="4" required="required">Option 4&nbsp;&nbsp;
						
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>







	<div id="pg_Personality_Questions" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<form action="upload_personality_q.php" id="add_personality_q" method="POST" role="form">
					<legend>Personality Questions</legend>

					<div class="form-group">
						<label for="">Question</label>
						<input type="text" class="form-control" id="" placeholder="Question" name="personality_q_question">
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Openness to Experience:</label>
							<select name="personality_q_openness_to_experience" class="form-control">		
								<option value="sd">Strongly disagree</option>
								<option value="d">Disagree</option>
								<option value="nda">Neither disagree nor agree</option>
								<option value="a">Agree</option>
								<option value="sa">Strongly Agree</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Conscientiousness:</label>
							<select name="personality_q_conscientiousness" class="form-control">		
								<option value="sd">Strongly disagree</option>
								<option value="d">Disagree</option>
								<option value="nda">Neither disagree nor agree</option>
								<option value="a">Agree</option>
								<option value="sa">Strongly Agree</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Extraversion:</label>
							<select name="personality_q_extraversion" class="form-control">		
								<option value="sd">Strongly disagree</option>
								<option value="d">Disagree</option>
								<option value="nda">Neither disagree nor agree</option>
								<option value="a">Agree</option>
								<option value="sa">Strongly Agree</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Agreebieness:</label>
							<select name="personality_q_agreebieness" class="form-control">		
								<option value="sd">Strongly disagree</option>
								<option value="d">Disagree</option>
								<option value="nda">Neither disagree nor agree</option>
								<option value="a">Agree</option>
								<option value="sa">Strongly Agree</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Neuroticism:</label>
							<select name="personality_q_neuroticism" class="form-control">		
								<option value="sd">Strongly disagree</option>
								<option value="d">Disagree</option>
								<option value="nda">Neither disagree nor agree</option>
								<option value="a">Agree</option>
								<option value="sa">Strongly Agree</option>
							</select>
						</div>
					</div>

					<div class="col-md-12">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>









	<div id="pg_add_job_details" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<form action="upload_add_job_details.php" id="upload_add_job_details" method="POST" role="form">
					<legend>Job Details</legend>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Job ID:</label>
							<input type="number" class="form-control" id="add_job_details_job_id" placeholder="Job ID" name="add_job_details_job_id" disabled="disabled">
						</div>
						<script type="text/javascript">
							<?php
							require "conn.php";	
							$query = "SELECT job_id FROM pps_job_desc ORDER BY job_id DESC;";
							$result = mysqli_query($conn,$query);
							$data = mysqli_fetch_assoc($result);
							$job_id = $data['job_id'] + 1;
							?>
							document.getElementById("add_job_details_job_id").value = "<?php echo $job_id ?>"
						</script>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Designation:</label>
							<input type="text" class="form-control" id="" placeholder="Designation" name="add_job_details_designation">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Salary:</label>
							<input type="number" class="form-control" id="" placeholder="Salary" name="add_job_details_salary" min="0">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Place:</label>
							<input type="text" class="form-control" id="" placeholder="Place" name="add_job_details_place">
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>











	<div id="pg_requirement_details" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<form action="" id="requirement_details" method="POST" role="form">
					<legend>Job Requirement</legend>
					<div class="row">

						<div class="col-md-12">
							<div class="form-group">
								<label for="">Job ID:</label>
								<select name="requirement_details_job_id_number" class="form-control" id="requirement_details_job_id_number" style="width: 30%;">
									<?php
									require "conn.php";	
									$query = "SELECT job_id FROM pps_job_desc ORDER BY job_id DESC;";
									$result = mysqli_query($conn,$query);
									while($data = mysqli_fetch_assoc($result)){
										echo '<option value="' .$data['job_id']. '"">' .$data['job_id']. '</option>';
									}
									?>
								</select>
							</div>


							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>

				<form action="upload_update_job_details.php" id="requirement_details_update" method="POST" role="form">
					<!-- <legend>Job Requirement</legend> -->
					<div class="row">
						<div class="col-md-12">
							<br>

							<div class="col-md-6">
								<?php
								require "conn.php";	


								IF(isset($_POST['requirement_details_job_id_number'])){

									$job_id = $_POST['requirement_details_job_id_number'];
									$query = "SELECT job_id, designation, salary, place FROM pps_job_desc WHERE job_id = $job_id;";
									$result = mysqli_query($conn,$query);
									$data = mysqli_fetch_assoc($result);

									// echo $data['designation'];
									echo "<br><b>Job ID: ".$data['job_id']. "</b><br>";
									echo "<b>Designation : " .$data['designation']. "</b><br>
									<b>Salary : " .$data['salary']. "</b><br>
									<b>Place : " .$data['place']. "</b><br>";
								}
								
								else {
									echo "<h3>Choose an ID above and click on Submit.</h3>";
									// echo "notset";
								}
								

								// }

								?> 
							</div>
						</div>
					</div>

					<input type="number" class="form-control" id="requirement_details_job_id" placeholder="job_id" name="requirement_details_job_id" min="0" style="visibility: hidden;">
					<script type="text/javascript">
						document.getElementById("requirement_details_job_id").value = "<?php echo $job_id ?>"
					</script>


					<div class="col-md-6">
						<div class="form-group">
							<label for="">Exerience required for the job (in years):</label>
							<input type="number" class="form-control" id="" placeholder="Exerience (in years)" name="requirement_details_experience" min="0" required="required">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Qualification:</label>
							<input type="text" class="form-control" id="" placeholder="Qualification" name="requirement_details_qualification" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="">Key Skills:</label>
						<input type="text" class="form-control" id="" placeholder="Key Skills" name="requirement_details_key_skills" required="required">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>











	<div id="pg_prefered_cv" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<form action="prefered_cv.php" id="prefered_cv" method="POST" role="form">
					<legend>Prefered CV</legend>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Job ID:</label>
								<select name="prefered_cv_job_id" class="form-control"  style="width: 30%;">	
									<option value="id_1">1</option>	
									<option value="id_2">2</option>
								</select>
							</div>

							<div class="col-md-6">
								<b>Designation :</b><br>
								<b>Salary :</b><br>
								<b>Place :</b><br>
							</div>
						</div>
					</div>
					<br>
					<br>
					<div class="col-md-6">
						<input type="file" name="requirement_details_experience"><br>
					</div>
					<br>	
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>




	<div id="pg_shortlisted_cv" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<form action="shortlisted_cv.php" id="shortlisted_cv" method="POST" role="form">
					<legend>Shortlisted CV</legend>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Job ID:</label>
								<select name="shortlisted_cv_job_id" class="form-control"  style="width: 30%;">	
									<option value="id_1">1</option>	
									<option value="id_2">2</option>
								</select>
							</div>

							<div class="col-md-6">
								<b>Designation :</b><br>
								<b>Salary :</b><br>
								<b>Place :</b><br>
							</div>
						</div>
					</div>
					<br>

					<button type="submit" class="btn btn-primary">Submit</button>
					<br>
					<br>
					<br>
					<div class="container">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>Doe</td>
									<td>john@example.com</td>
								</tr>
								<tr>
									<td>Mary</td>
									<td>Moe</td>
									<td>mary@example.com</td>
								</tr>
								<tr>
									<td>July</td>
									<td>Dooley</td>
									<td>july@example.com</td>
								</tr>
							</tbody>
						</table>
					</div>

				</form>
			</div>
		</div>
	</div>







	<div id="pg_view_apptitude_q" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<legend>Apptitude Questions</legend>
				<div class="container">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>id</th>
								<th>apptitude_q_type</th>
								<th>apptitude_q_question</th>
								<th>apptitude_q_option_1</th>
								<th>apptitude_q_option_2</th>
								<th>apptitude_q_option_3</th>
								<th>apptitude_q_option_4</th>
								<th>apptitude_q_answer</th>
							</tr>
						</thead>
						<tbody>
							<?php
							require "conn.php";	
							$query = "SELECT * FROM pps_apptitude_q ORDER BY id ASC;";
							$result = mysqli_query($conn,$query);
							while($data = mysqli_fetch_assoc($result)){
								echo '<tr>';
								echo '<td>' . $data['id'] . '</td>';
								echo '<td>' . $data['apptitude_q_type'] . '</td>';
								echo '<td>' . $data['apptitude_q_question'] . '</td>';
								echo '<td>' . $data['apptitude_q_option_1'] . '</td>';
								echo '<td>' . $data['apptitude_q_option_2'] . '</td>';
								echo '<td>' . $data['apptitude_q_option_3'] . '</td>';
								echo '<td>' . $data['apptitude_q_option_4'] . '</td>';
								echo '<td>' . $data['apptitude_q_answer'] . '</td>';
								echo '</tr>';
							}
							?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>





	<div id="pg_view_personality_q" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<legend>Personality Questions</legend>
				<div class="container">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>personality_q_question</th>
								<th>openness_to_experience</th>
								<th>conscientiousness</th>
								<th>extraversion</th>
								<th>agreebieness</th>
								<th>neuroticism</th>
							</tr>
						</thead>
						<tbody>
							<?php
							require "conn.php";	
							$query = "SELECT * FROM pps_personality_q ORDER BY id ASC;";
							$result = mysqli_query($conn,$query);
							while($data = mysqli_fetch_assoc($result)){
								echo '<tr>';
								echo '<td>' . $data['id'] . '</td>';
								echo '<td>' . $data['personality_q_question'] . '</td>';
								echo '<td>' . $data['personality_q_openness_to_experience'] . '</td>';
								echo '<td>' . $data['personality_q_conscientiousness'] . '</td>';
								echo '<td>' . $data['personality_q_extraversion'] . '</td>';
								echo '<td>' . $data['personality_q_agreebieness'] . '</td>';
								echo '<td>' . $data['personality_q_neuroticism'] . '</td>';
								echo '</tr>';
							}
							?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>






	<div id="pg_view_job_details" class="dynamic-content">
		<div class="container">
			<div class="row content_section">
				<legend>Job Details</legend>
				<div class="container">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>job_id</th>
								<th>designation</th>
								<th>salary</th>
								<th>place</th>
								<th>Experience</th>
								<th>Qualification</th>
								<th>Key Skills</th>
							</tr>
						</thead>
						<tbody>
							<?php
							require "conn.php";	
							$query = "SELECT * FROM pps_job_desc ORDER BY job_id ASC;";
							$result = mysqli_query($conn,$query);
							while($data = mysqli_fetch_assoc($result)){
								echo '<tr>';
								echo '<td>' . $data['job_id'] . '</td>';
								echo '<td>' . $data['designation'] . '</td>';
								echo '<td>' . $data['salary'] . '</td>';
								echo '<td>' . $data['place'] . '</td>';
								echo '<td>' . $data['Experience'] . '</td>';
								echo '<td>' . $data['Qualification'] . '</td>';
								echo '<td>' . $data['Key_Skills'] . '</td>';
								echo '</tr>';
							}
							?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>






	<!-- <section class="apptitude_q_form">
		<form action="apptitude_q.php" id="add_apptitude_q">
			Apptitude Questions <br>
			<br>
			Type:
			<select name="apptitude_q_type">		
				<option value="English">English</option>
				<option value="Maths">Maths</option>
				<option value="Programming">Programming</option>
			</select><br>
			Question:
			<input type="text" name="apptitude_q_question"><br>
			Option 1:
			<input type="text" name="apptitude_q_option_1"><br>
			Option 2:
			<input type="text" name="apptitude_q_option_2"><br>
			Option 3:
			<input type="text" name="apptitude_q_option_3"><br>
			Option 4:
			<input type="text" name="apptitude_q_option_4"><br>
			Answer:
			<input type="text" name="apptitude_q_answer"><br>
			<input type="submit">
		</form>
	</section>




	<section class="personality_q_form">
		<form action="personality_q.php" id="personality_q">
			Personality Questions <br>
			<br>
			Openness to Experience:
			<select name="personality_q_openness_to_experience">		
				<option value="sd">Strongly disagree</option>
				<option value="d">Disagree</option>
				<option value="nda">Neither disagree nor agree</option>
				<option value="a">Agree</option>
				<option value="sa">Strongly Agree</option>
			</select><br>
			Conscientiousness:
			<select name="personality_q_openness_to_experience">		
				<option value="sd">Strongly disagree</option>
				<option value="d">Disagree</option>
				<option value="nda">Neither disagree nor agree</option>
				<option value="a">Agree</option>
				<option value="sa">Strongly Agree</option>
			</select><br>
			Extraversion:
			<select name="personality_q_openness_to_experience">		
				<option value="sd">Strongly disagree</option>
				<option value="d">Disagree</option>
				<option value="nda">Neither disagree nor agree</option>
				<option value="a">Agree</option>
				<option value="sa">Strongly Agree</option>
			</select><br>
			Agreebieness:
			<select name="personality_q_openness_to_experience">		
				<option value="sd">Strongly disagree</option>
				<option value="d">Disagree</option>
				<option value="nda">Neither disagree nor agree</option>
				<option value="a">Agree</option>
				<option value="sa">Strongly Agree</option>
			</select><br>
			Neuroticism:
			<select name="personality_q_openness_to_experience">		
				<option value="sd">Strongly disagree</option>
				<option value="d">Disagree</option>
				<option value="nda">Neither disagree nor agree</option>
				<option value="a">Agree</option>
				<option value="sa">Strongly Agree</option>
			</select><br>
			<input type="submit">
		</form>
	</section>








	<section class="add_job_details">
		<form action="add_job_details.php" id="add_job_details">
			Job Details <br>
			<br>
			Job ID:
			<input type="number" name="add_job_details_job_id"><br>
			Designation:
			<input type="text" name="add_job_details_designation"><br>
			Salary:
			<input type="number" name="add_job_details_salary"><br>
			Place:
			<input type="text" name="add_job_details_place"><br>
			<input type="submit">
		</form>
	</section>





	<section class="requirement_details">
		<form action="requirement_details.php" id="requirement_details">
			Job Requirement<br>
			<br>
			Job ID:
			<select name="requirement_details_job_id">		
				<option value="id_1">1</option>	
				<option value="id_2">2</option>
			</select><br>
			
			Designation:<br>
			Salary:<br>
			Place:<br>

			Exerience(years):
			<input type="number" name="requirement_details_experience"><br>
			Qualification:
			<input type="text" name="requirement_details_qualification"><br>
			Key Skills:
			<input type="text" name="requirement_details_key_skills"><br>

			<input type="submit">
		</form>
	</section>




	<section class="prefered_cv">
		<form action="prefered_cv.php" id="prefered_cv">
			Prefered CV<br>
			<br>
			Job ID:
			<select name="requirement_details_job_id">		
				<option value="id_1">1</option>	
				<option value="id_2">2</option>
			</select><br>
			Designation:<br>
			Salary:<br>
			Place:<br>

			Prefered CVs:
			<input type="file" name="requirement_details_experience"><br>
			<input type="submit" placeholder="Upload">
		</form>
	</section> -->





	<div class="container-fluid" style="background-color: #111; padding: 50px">
		<div class="row">
			<div class="col-md-3">
				<ul>
					<li><a href="#">Apptitude Questions</a></li>
					<li><a href="#">Personality Questions</a></li>
					<li><a href="#">Job Details</a></li> 
					<li><a href="#">View Details</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul>
					<li><a href="#">Job Details</a>
						<ul>
							<li><a href="#">Add Job Details</a></li>
							<li><a href="#">Requirement Details</a></li>
							<li><a href="#">Prefered CV</a></li>
							<li><a href="#">Shortlisted CV</a></li>
						</ul>
					</li> 
				</ul>
			</div>
			<div class="col-md-3">
				<ul>
					<li><a href="#">View Details</a>
						<ul>
							<li><a href="#">View Apptitude Questions</a></li>
							<li><a href="#">View Personality Questions</a></li>
							<li><a href="#">View Job Details</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<div class="footer_note">
					<a href="http://kshitijtomar.tech/project/other_projects/mani_sir_website/index.html">©NPDS Mani Group | All Rights Reserved</a>
				</div>
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
		if (dynamicContent == 'pgaq') {
			$('#pg_Apptitude_Questions').show();
		} 
		else if (dynamicContent == 'pgpq') {
			$('#pg_Personality_Questions').show();
		}
		else if (dynamicContent == 'pgajd') {
			$('#pg_add_job_details').show();
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
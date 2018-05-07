<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require "conn.php";


	if(isset($_POST["test_complete_submit"])){
		$_SESSION['view_test_result'] = 1; 
	}else{
		$_SESSION['view_test_result'] = 0; 
	}

	$query = "SELECT * FROM pps_apptitude_q;";

	$english_score=0;
	$maths_score=0;
	$programming_score=0;
	$apti_score = 0;

	$english_questions=0;
	$maths_questions=0;
	$programming_questions=0;
	$apti_questions = 0;

	$result = mysqli_query($conn,$query);
	while($data = mysqli_fetch_assoc($result)){	
		$id = $data['id'];
		$ans = $data['apptitude_q_answer'];
		$sub = $data['apptitude_q_type'];

		++$apti_questions;
		if($sub=="English") { ++$english_questions;}
		if($sub=="Maths") { ++$maths_questions;}
		if($sub=="Programming") { ++$programming_questions;}

		//if answer matches then
		if($ans == $_POST[$id]){
			++$apti_score;
			if($sub=="English") { ++$english_score;} 
			if($sub=="Maths") { ++$maths_score;}
			if($sub=="Programming") { ++$programming_score;}
		}
	}	
	// echo $apti_score ."/". $apti_questions;

	$_SESSION["apti_score"] = floor($apti_score / $apti_questions * 10);
	$_SESSION["english_score"] = $english_score;
	$_SESSION["maths_score"] = $maths_score;
	$_SESSION["programming_score"] = $programming_score;
	$_SESSION["english_questions"] = $english_questions;
	$_SESSION["maths_questions"] = $maths_questions;
	$_SESSION["programming_questions"] = $programming_questions;

	header( "refresh:0;url=content_u.php?dc=result");
	?>

</body>

</html>
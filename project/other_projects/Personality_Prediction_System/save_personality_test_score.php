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

	$query = "SELECT * FROM pps_personality_q;";

	$perso_score=0;
	$perso_questions=0;
	$openness_to_experience = 0;
	$conscientiousness = 0;
	$extraversion = 0;
	$agreebieness = 0;
	$neuroticism = 0;

	

	$result = mysqli_query($conn,$query);
	while($data = mysqli_fetch_assoc($result)){	
		$id = $data['id'];

		$perso_questions = $perso_questions+3;
		if($_POST[$id] == 1){  $perso_score= $perso_score+3; ++$openness_to_experience;}
		if($_POST[$id] == 2){  $perso_score= $perso_score+2; ++$conscientiousness; }
		if($_POST[$id] == 3){  $perso_score= $perso_score+1; ++$extraversion; }
		if($_POST[$id] == 4){  $perso_score= $perso_score+0; ++$agreebieness; }
		if($_POST[$id] == 5){  $perso_score= $perso_score-1; ++$neuroticism; }
	}


	$_SESSION["perso_score"] = floor($perso_score / $perso_questions * 10);
	$_SESSION["perso_openness_to_experience"] = $openness_to_experience;
	$_SESSION["perso_conscientiousness"] = $conscientiousness;
	$_SESSION["perso_extraversion"] = $extraversion;
	$_SESSION["perso_agreebieness"] = $agreebieness;
	$_SESSION["perso_neuroticism"] = $neuroticism;

	header( "refresh:0;url=content_u.php?dc=test2");
	?>

</body>

</html>
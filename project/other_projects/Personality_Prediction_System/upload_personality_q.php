<?php
require "conn.php";
$personality_q_question = $_POST['personality_q_question'];
$personality_q_openness_to_experience = $_POST['personality_q_openness_to_experience'];
$personality_q_conscientiousness = $_POST['personality_q_conscientiousness'];
$personality_q_extraversion = $_POST['personality_q_extraversion'];
$personality_q_agreebieness = $_POST['personality_q_agreebieness'];
$personality_q_neuroticism = $_POST['personality_q_neuroticism'];




$mysql_qry = "INSERT INTO `pps_personality_q` (`id`, `personality_q_question`, `personality_q_openness_to_experience`, `personality_q_conscientiousness`, `personality_q_extraversion`, `personality_q_agreebieness`, `personality_q_neuroticism`) VALUES (NULL,'$personality_q_question', '$personality_q_openness_to_experience', '$personality_q_conscientiousness', '$personality_q_extraversion', '$personality_q_agreebieness', '$personality_q_neuroticism');";

//$mysqli_result  = mysqli_query($conn,$mysql_qry);
if ($conn->query($mysql_qry) === TRUE) 
	{echo "Insert successful !";
	header('Location: content.html?dc=pgpq');}

else
	echo "Error : " . $mysql_qry . "<br>" . $conn->error;
$conn->close();
?>
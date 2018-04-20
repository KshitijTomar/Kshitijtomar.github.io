<?php
require "conn.php";
$apptitude_q_type = $_POST['apptitude_q_type'];
$apptitude_q_question = $_POST['apptitude_q_question'];
$apptitude_q_option_1 = $_POST['apptitude_q_option_1'];
$apptitude_q_option_2 = $_POST['apptitude_q_option_2'];
$apptitude_q_option_3 = $_POST['apptitude_q_option_3'];
$apptitude_q_option_4 = $_POST['apptitude_q_option_4'];
$apptitude_q_answer = $_POST['apptitude_q_answer'];




$mysql_qry = "INSERT INTO `pps_apptitude_q` (`id`, `apptitude_q_type`, `apptitude_q_question`, `apptitude_q_option_1`, `apptitude_q_option_2`, `apptitude_q_option_3`, `apptitude_q_option_4`, `apptitude_q_answer`) VALUES (NULL,'$apptitude_q_type','$apptitude_q_question','$apptitude_q_option_1','$apptitude_q_option_2','$apptitude_q_option_3','$apptitude_q_option_4','$apptitude_q_answer');";

//$mysqli_result  = mysqli_query($conn,$mysql_qry);
if ($conn->query($mysql_qry) === TRUE) 
	{echo "Insert successful !";
	header('Location: content.html?dc=pgaq');}

else
	echo "Error : " . $mysql_qry . "<br>" . $conn->error;
$conn->close();
?>
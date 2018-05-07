<?php
require "conn.php";
$add_job_details_designation = $_POST['add_job_details_designation'];
$add_job_details_salary = $_POST['add_job_details_salary'];
$add_job_details_place = $_POST['add_job_details_place'];

$mysql_qry = "INSERT INTO `pps_job_desc` (`job_id`, `designation`, `salary`, `place`) VALUES (NULL, '$add_job_details_designation', '$add_job_details_salary', '$add_job_details_place' );";

//$mysqli_result  = mysqli_query($conn,$mysql_qry);
if ($conn->query($mysql_qry) === TRUE) 
{
	echo "Insert successful !";
	header( "refresh:2;url=content.php?dc=pgajd" );
}

else
	echo "Error : " . $mysql_qry . "<br>" . $conn->error;
$conn->close();
?>
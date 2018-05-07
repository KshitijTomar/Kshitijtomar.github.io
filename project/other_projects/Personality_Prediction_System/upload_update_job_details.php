<?php
require "conn.php";


$mysql_qry = "UPDATE `pps_job_desc` SET Experience = '". $_POST['requirement_details_experience'] ."', Qualification = '". $_POST['requirement_details_qualification'] ."', Key_Skills = '". $_POST['requirement_details_key_skills'] ."' WHERE job_id = ". $_POST['requirement_details_job_id'] .";";



//$mysqli_result  = mysqli_query($conn,$mysql_qry);
if ($conn->query($mysql_qry) === TRUE) 
{
	echo "Update successful !";
	header( "refresh:2;url=content.php?dc=pgrd" );
}

else
	echo "Error : " . $mysql_qry . "<br>" . $conn->error;
$conn->close();
?>
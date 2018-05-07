<?php
require "conn.php";
$u_name = $_POST['u_name'];
$u_email = $_POST['u_email'];
$u_number = $_POST['u_number'];
$u_username = $_POST['u_username'];
$u_password = $_POST['u_password'];

//check if username exists
$result = mysqli_query($conn, "SELECT * FROM `pps_user_details` WHERE u_username = $u_username LIMIT 1");
$num_rows = mysqli_num_rows($result);

//if exists
if ($num_rows > 0) {
	echo "User name exists! Choose a new user name. &nbsp;&nbsp;&nbsp; Redirecting to Registration page.";
	header( "refresh:3;url=register_user.php" );
}

//if not exists
else {
	$mysql_qry = "INSERT INTO `pps_user_details`(`id`, `u_name`, `u_email`, `u_number`, `u_username`, `u_password` , `personality_score`, `apptitude_score`) VALUES (NULL, $u_name, $u_email, $u_number, $u_username, $u_password , 0, 0);";
	if ($conn->query($mysql_qry) === TRUE) 
	{
		echo "Insert successful !";
		header( "refresh:2;url=user_login.php" );
	}
	else
		echo "Error : " . $mysql_qry . "<br>" . $conn->error;
}
$conn->close();
?>
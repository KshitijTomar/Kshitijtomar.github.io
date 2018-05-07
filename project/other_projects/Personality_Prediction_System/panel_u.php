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
	$u_username = $_POST['uname']; 
	$u_password = $_POST['pswd']; 

	$query = "SELECT * FROM `pps_user_details` WHERE u_username = $u_username AND u_password = $u_password;";
	if($result = $conn->query($query)){
		/* fetch associative array */
		if ($row = $result->fetch_assoc()) {
			$_SESSION["user_name"] = $u_username;
			echo "Login successful !";
			header( "refresh:1;url=content_u.php?dc=test" );
		}
	}
	else{
		echo "Login unsuccessful !";
		header( "refresh:0;url=user_login.html" );
	}
	?>

</body>

</html>
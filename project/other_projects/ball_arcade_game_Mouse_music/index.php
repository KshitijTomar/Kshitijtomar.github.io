<?php
	$host = "localhost";
	$db_user = "id860052_kshitij";
	$db_password = "kshitij123";
	$db_name = "id860052_kshitij_db";

	$conn = mysqli_connect($host,$db_user,$db_password,$db_name);


	$query = "SELECT `number_of_players_visited` FROM `ball_arcade_game_Mouse_music` ";
	
	
	$result = mysqli_query($conn,$query);
	$data = mysqli_fetch_assoc($result);
	$number_of_players_visited = $data['number_of_players_visited'];
	$number_of_players_visited = $number_of_players_visited + 1;


	$mysql_qry = "UPDATE `ball_arcade_game_Mouse_music` SET `number_of_players_visited` = '$number_of_players_visited';";

	//$mysqli_result  = mysqli_query($conn,$mysql_qry);
	if ($conn->query($mysql_qry) === TRUE) {
		$ch = curl_init("https://kshitijtomar.github.io/project/other_projects/ball_arcade_game_Mouse_music/game.html");
		curl_exec($ch);
	}
	else{
		$ch = curl_init("https://kshitijtomar.github.io/project/other_projects/ball_arcade_game_Mouse_music/game.html");
		curl_exec($ch);
	}
?>

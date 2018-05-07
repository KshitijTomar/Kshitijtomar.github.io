<?php

$host = "localhost";
$db_user = "id860052_kshitij";
$db_password = "kshitij123";
$db_name = "id860052_kshitij_db";

$conn = mysqli_connect($host,$db_user,$db_password,$db_name);

if(!$conn)
	echo "connection Error";
else
    echo "connection Success";

?>
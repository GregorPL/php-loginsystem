<?php
	$db_user = "root";
	$db_pass = "";
	$db_host = "localhost";
	$db_name = "loginsystem";

	$conn = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if (!$conn){
		die("Error: ".mysqli_connect_errno());
	}

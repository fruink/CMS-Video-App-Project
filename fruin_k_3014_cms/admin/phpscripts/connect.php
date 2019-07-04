<?php
	$user = "root";
	$pass = "";//root for mac only
	$url = "localhost";
	$db = "db_moviesappcms";

	//$link = mysqli_connect($url, $user, $pass, $db, "8889"); //Mac
	$link = mysqli_connect($url, $user, $pass, $db); //PC

	//check connection
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>

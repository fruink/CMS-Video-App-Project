<?php
	require_once('config.php');

	if(isset($_GET['caller_id'])){
		$dir = $_GET['caller_id'];
		if($dir == "logout"){
			logged_out();
			//delete movie from site
		}else if($dir == "deleteM"){
			$id = $_GET['id'];
			deleteMovie($id);//delete movie's id from db
		}else{
			echo "Caller id was passed incorrectly.";
		}
	}

?>

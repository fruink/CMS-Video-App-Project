<?php
	session_start();
	//confirm user is logged in
	function confirm_logged_in() {
		if(!isset($_SESSION['user_id'])){
			redirect_to("admin_login.php");
		}
	}
	//confirm user is logged out
	function logged_out(){
		session_destroy();
		redirect_to("../../index.php");
	}

?>

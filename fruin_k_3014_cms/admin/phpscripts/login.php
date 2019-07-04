<?php
    //login backend code
    function logIn($username, $password){
        require_once('connect.php');

        $username = mysqli_real_escape_string($link, $username);
        $password = mysqli_real_escape_string($link, $password);
        //fetch user's info from db using query
        $loginstring = "SELECT * FROM tbl_users WHERE user_name = '{$username}'";
        $user_set = mysqli_query($link, $loginstring);
        if(mysqli_num_rows($user_set)){

        //find user in db to verify
        $found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			  $id = $found_user['user_id'];

        $_SESSION['user_id'] = $id;
        $_SESSION['user_name'] = $found_user['user_name'];
        $_SESSION['logged_in'] = 'okay';

        $passowrd = $found_user['user_pass'];

          //if user is found in db. will be re-directed to the edit page (admin_update.php)
          if (password_verify($password)){
				  redirect_to("admin_update.php");
          //if user is not found, then will see msg telling them to re-enter with correct info
			    }else{
            echo "Incorrect login, please try again.";
          }
		      }else{
			       $message = "username or password entered is incorrect.<br><br>Please make sure your spelling is correct and cap lock key is turned off before trying again.";
			   return $message;
		     }
  }

?>

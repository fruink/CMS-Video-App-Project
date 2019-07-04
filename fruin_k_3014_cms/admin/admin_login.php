<?php

    require_once('phpscripts/config.php');


    //after login user is re-directed to index.php (homepage view for logged in user)





    if(isset($_POST['submit'])){
    //user's username and password
    $username = trim($_POST['username']);
		$password = trim($_POST['password']);
    //fill in the available and displayed inputs to login to your admin panel to edit movies or create a new user
    if($username !== "" && $password !== "") {
			$result = logIn($username, $password);
			$message = $result;
      //if not, then user will see msg telling them to make sure to fill our all the displayed inputs inorder to login
    }else{
			$message = "Please fill in all the required fields";
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Page</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <h1 class='login_account'>Login account</h1>

  <?php if(!empty($message)){echo $message;} ?>

  <form action="admin_login.php" method="post">
		<label class='label'>username:</label>
		<input class ='input' type="text" name="username" value="">
		<br>
		<label class='label'>password:</label>
		<input class ='input' type="password" name="password" value="">
		<br>
		<input id='login_btn'type="submit" name="submit" value="Login">
	</form>

</body>
</html>

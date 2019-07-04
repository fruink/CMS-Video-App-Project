<?php

  //this page was referenced by class example

  //create user
  function createUser($fname, $lname, $username, $password, $email, $verify) {
    include('connect.php');

    //we don't want a user signing up / creating more than one account for this site, so...we create a email check in the database to make sure.
    $checkString = "SELECT * FROM tbl_users WHERE user_email = '{$email}'";
    //echo $checkString;
    $checkQuery = mysqli_query($link, $checkString);

    //email will be checked from db when new user creates an account with site
    if($checkQuery == ''){
        echo 'Email is already taken. Enter another email below.';
    }else{

        $userstring = "INSERT INTO tbl_users (user_fname, user_lname, user_name, user_pass, user_email, user_verify) VALUES ('${fname}', '${lname}', '${username}', '${password}', '${email}', 'no')";
        echo $userstring;
        $userquery = mysqli_query($link, $userstring);


        mysqli_close($link);
        redirect_to('admin_update.php');
    }
}
?>

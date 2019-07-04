<?php

    require_once('phpscripts/config.php');
    confirm_logged_in();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Update</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body>
  <!--welcome msg for user/admin when logged in, makes it feel personal and user friendly :)-->
  <?php echo '<h2 class="login_account"> Hello '.$_SESSION['user_name'].'. What do you want to do?</h2>';

  echo '<h3 class="login_account">click below to edit a movie or create.</h3>';


  //header echo redirects user back to homepage
  echo '
      <header class="topBar">
          <i><a href="index.php">Back to movies</a></i>
      </header>
    ';


  ?>



  <!--Admin/user can edit movies or create a new user, post a review by clicking on the below thumbnails-->

  <section class="update_movies">
  <div class='edit_content'><a href="admin_add_movie.php">Add a Movie</a></div>
  <div class='edit_content'><a href="admin_delete_movie.php">Delete a Movie</a></div>
  <div class='edit_content'><a href="admin_edit.php">Edit/Update</a></div>
  <div class='edit_content'><a href="admin_post_review.php">Post a review</a></div>
  <div class='edit_content'><a href="admin/phpscripts/caller.php?caller_id=logout">Sign out</a></div>
  </section>


</body>
</html>

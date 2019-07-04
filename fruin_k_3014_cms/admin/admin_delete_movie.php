<?php

    require_once('phpscripts/config.php');
    confirm_logged_in();

    $movies = getAllMovies();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete a movie</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body>

    <h2 class="delete_title">Delete a movie below</h2>

    <?php
    while($row = mysqli_fetch_array($movies)){


        //delete a movie from the db by fetching the movie's id
        echo "
          <div class='delete_movie'>
              <img src='../img/${row['movie_cover']}'>
              <br>
              <br>
              <a href=\"phpscripts/caller.php?caller_id=deleteM&id={$row['movie_id']}\">Delete Movie</a>
          </div>
            ";
      }

    ?>

    <!--redirects user back to homepage from details page-->
    <p><a id='back' href="admin_update.php">back to admin panel</a><p>

</body>
</html>

<?php

    require_once('phpscripts/config.php');
    confirm_logged_in();

    if(isset($_GET['id'])){
		$id = $_GET['id'];
		$tbl = "tbl_movies";
		$col = "movie_id";
    $getSingle = get_single_movie($tbl, $col, $id);
    $reviews = get_reviews($id);
    $genQuery = getGenres($id);//get genres id from db
  }

    //update or change a movie by pulling data entered from db
    if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $cover = $_FILES['newCover'];
    $runtime = $_POST['runtime'];
    $trailer = $_FILES['newTrailer'];
    $year = $_POST['year'];
    $desc = $_POST['desc'];
    $rate_score = $_POST['rate_score'];
    $genres = $_POST['genres'];
    editMovie($id, $title, $cover, $runtime, $trailer, $year, $desc, $year, $rate_score);
    addGenre($id, $genres);
  }

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body>


  <?php
		if(!is_string($getSingle)){
          //get single movie from db
          $row = mysqli_fetch_array($getSingle);




          //update movie or change it
          echo "
          <h2 class='login_account'>Update or change a movie</h2>

          <form id='update_form' action='admin_edit.php' method='post' enctype='multipart/form-data'>

              <input name='id' value='{$row['movie_id']}' class='hidden'>
              <label class='update_label'>Title:</label>
              <input class = 'update_input' type='text' name='title' value='{$row['movie_title']}'>
              <br>
              <br>
              <label class='update_label'>Cover:</label>
              <input class = 'update_input'  type='file' name='newCover' value='{$row['movie_cover']}'>
              <br>
              <br>
              <label class='update_label'>Runtime:</label>
              <input class = 'update_input'  type='text' name='runtime' value='{$row['movie_runtime']}'>
              <br>
              <br>
              <label class='update_label'>Trailer:</label>
              <input class = 'update_input'  type='file' name='trailer' value='{$row['movie_trailer']}'>
              <br>
              <br>
              <label class='update_label'>Year:</label>
              <input class = 'update_input'  type='text' name='year' value='{$row['movie_year']}'>
              <br>
              <br>
              <label class='update_label'>Description:</label>
              <textarea id ='update_input' type='text' name='desc'>{$row['movie_desc']}</textarea>
              <br>
              <br>
              <label class='update_label'>Rate Score:</label>
              <input class = 'update_input' type='text' name='rate_score' value='{$row['movie_rate_score']}'>
              <br>
              <br>
              <label class='update_label'>Genre:</label>
              <input class = 'update_input' type='text' name='genre' value='{$row['movgenre_id']}'>

		          <input id='edit_btn' type='submit' name='submit' value='Edit Movie'>
              </form>
              ";



          }
    ?>

  
    <p><a id='back' href="admin_update.php">back to admin panel</a><p>


</body>
</html>

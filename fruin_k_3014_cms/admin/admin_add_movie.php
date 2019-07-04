<?php

    require_once('phpscripts/config.php');
    confirm_logged_in();

    if(isset($_POST['submit'])){
		$title = trim($_POST['title']);
    $cover = $_FILES['newCover'];
    $runtime = $_POST['runTime'];
    $trailer = $_FILES['newTrailer'];
    $year = $_POST['year'];
    $desc = $_POST['desc'];
    $rate_score = $_POST['rate_score'];
    $genres = $_POST['genres'];
		$result = addMovie($title, $cover, $runtime, $trailer, $year, $desc, $rate_score, $genres);
    }

    $genQuery = getGenres();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Movie</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <!--add a new movie by filling out the form below-->
    <h2 class="add_mov">Add a Movie</h2>
    <form  id ='add_form' action="admin_add_movie.php" method="post" enctype="multipart/form-data">
      <label class='add_label'>Title:</label><br>
      <input class ='add_input' type="text" name="title" value="">
      <br>
		  <label class='add_label'>Cover:</label><br>
		  <input class ='add_input' type='file' name='newCover' value=''>
		  <br>
      <label class='add_label'>Run Time:</label><br>
      <input class ='add_input' type="text" name="runTime" value="">
      <br>
      <label class='add_label'>Trailer:</label><br>
		  <input class ='add_input' type='file' name='newTrailer' value=''>
		  <br>
      <label class='add_label'>Year:</label><br>
      <input class ='add_input' type="text" name="year" value="">
      <br>
      <label class='add_label'>Description:</label><br>
      <textarea class ='add_input' name='desc'></textarea>
      <br>
      <label class='add_label'>Score number:</label><br>
      <input class ='add_input' type="text" name="rate_score" value="">
      <br>
      <select name="genres" class="add_input">
			<option value="">Genres</option>

      <?php

        //select a genre based on movie
				while($row = mysqli_fetch_array($genQuery)){
					echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
				}

      ?>

		  </select>

      <br>
		  <input id='add_btn' type="submit" name="submit" value="Add Movie">

      <!--redirects user back to homepage from details page-->
      <p><a id='back' href="admin_update.php">back to admin panel</a><p>


      </form>

</body>
</html>

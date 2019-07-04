<?php

    //this page was referenced by class example but mainly researched from web and got help

    require_once('admin/phpscripts/config.php');

    if(isset($_GET['id'])){

    $id = $_GET['id'];
    //fetch movies from movies table
		$tbl = "tbl_movies";
    //fetch movies id(s) from movies table
		$col = "movie_id";

    //fetch movie details from db

    //fetch a single movie
    $getSingle = get_single_movie($tbl, $col, $id);//getSingle is a term used to fetch a movie (class example)
    //fetch movie genre
    $genres= get_genres_movie($id);
    //fetch movie reviews
    $reviews = get_reviews($id);
    //fetch users ratings, only works when inerted from db not on the site
    $uratings = get_user_ratings($id);//haven't figured it out yet...
    $overallScore = 0; //score depends on insert from db or what user(s) score
    $users_rating = 0; //rating depends on insert of db or what user(s) rate

    }



?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Movie Details</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"><!--using ionicons for icons in this project-->
</head>
<body>
	<?php
		if(!is_string($getSingle)){
			$row = mysqli_fetch_array($getSingle);

      //redirects user back to homepage from details page
      echo "<a id='back' href=\"index.php\">back to home</a>";


      //displays selected movie details by displaying the movies title, runtime, year, overall score, user/admin score, and desc of the movie
      //video controls function gives the video default controls to play the .mp4
      echo "

      <video controls id='video'>
        <source src='video/{$row['movie_trailer']}' type='video/mp4'>
      </video>

      <section id='movie_info'>
      <h2 id='title'>{$row['movie_title']}</h2>
      <img src='../img/${row['movie_cover']}'>

      <h4 id='runtime' class='details'>{$row['movie_runtime']}</h4>
      <h4 id='year' class='details'>{$row['movie_year']}</h4>
      <h4 id='cover' class='details'>{$row['movie_cover']}</h4>
      <p id='desc'>{$row['movie_desc']}</p>


        ";


      //project requirement attempt to display movie score/rating and allow them when logged in to post review



      //movies rating score
      while($score = mysqli_fetch_array($uratings)){//user's ratings from db
      //overall score of rating
      $overallScore = $overallScore + $score['rating_num'];//overall score + score rated display
      }

      //users score rating of movie based off of opinion
      if($users_rating !== 0){
      //score equals overall viewers score and user/admin's score of selected movie out of /5 rate
      $score = $overallScore/$users_rating;
      echo "<h3 id='urating' class='details'>Review Score: {$score}/5</h3>";
      }else{
      echo "<h3 id='urating' class='details'>No review yet, post a review in Edit/Add movie on homepage</h3>";
      }


        //only logged in user can leave a review in the textarea
        echo "

        </div>

      </section>




    ";

        }




	?>

</body>
</html>

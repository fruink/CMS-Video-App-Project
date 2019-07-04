<?php


    //movie genres from tbl_genre
    function getGenres(){
      include('connect.php');
      $genreString = "SELECT * FROM tbl_genre";
      $genreQuery = mysqli_query($link, $genreString);
      return $genreQuery;
      mysqli_close($link);
  }


    //get movies genres by their id number and linked tbl
    function get_genres_movie($id){
      include('connect.php');
      //fetch movie based on linked tbl and individual tbl...eg. tbl_movie and tbl_genres
      $genreQueryString = "SELECT * FROM tbl_movies, tbl_genre, tbl_mov_genre WHERE tbl_movies.movie_id = tbl_mov_genre.movie_id AND tbl_genre.genre_id = tbl_mov_genre.genre_id AND tbl_movies.movie_id = '{$id}'";
      $genreQuery = mysqli_query($link, $genreQueryString);
      if($genreQuery){
			return $genreQuery;
		  }else{
			$error = "There was a problem accessing this information. Please contact your admin for assistance.";
			return $error;
	}
		  mysqli_close($link);
}


    //fetch a single movie from genre rows
    function get_single_genre($genre, $tbl, $tbl2, $tbl3, $col, $col2, $col3){
      include('connect.php');
      //get movies from db based on enteries
      $genreSingleString = "SELECT * FROM {$tbl}, {$tbl2}, {$tbl3} WHERE {$tbl}.{$col} = {$tbl3}.{$col} AND {$tbl2}.{$col2} = {$tbl3}.{$col2} AND {$tbl2}.{$col3} = '{$genre}'";
      $genreSingleQuery = mysqli_query($link, $genreSingleString);
      return $genreSingleQuery;
      myslqi_close($link);
}

    // get a single movie from db
    function get_single_movie($tbl, $col, $id) {
		  include('connect.php');
		  $querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		  $runSingle = mysqli_query($link, $querySingle);
		  if($runSingle){
			return $runSingle;
		  }else{
			$error = "There was a problem accessing this information. Please contact your admin for assistnace.";
			return $error;
	}
		  mysqli_close($link);
}

  //get all movies from db (tbl_movies)
    function getAllMovies(){
		  include('connect.php');
      //fetch movies from tbl_movies
		  $querySingle = "SELECT * FROM tbl_movies";
		  $runSingle = mysqli_query($link, $querySingle);
		  return $runSingle;
		  mysqli_close($link);
	}

    //fetch movies reviews from tbl_reviews
    function get_reviews($id){
      include('connect.php');
      $reviewString = "SELECT * FROM tbl_reviews WHERE reviews_movie = {$id}";
      $reviewQuery = mysqli_query($link, $reviewString);
      if($reviewQuery){
			return $reviewQuery;
		  }else{
			$error = "There was a problem accessing this information. Please contact your admin for assistance.";
			return $error;
	}
		  mysqli_close($link);
}

    //user ratings (not completely functional on site yet, but added in for details.php)
    function get_user_ratings($id){//not sure if it's working atm
      include('connect.php');
      //inserts into urating tbl (meaning user's rating on specified movie)
      $uratingString = "SELECT * FROM tbl_urating WHERE rating_movie = {$id}";
      $uratingQuery = mysqli_query($link, $uratingString);
		  return $uratingQuery;
		  mysqli_close($link);
  }

  //admin_delete_movie.php

  // ability for user/admin to delete a movie
  function deleteMovie($id){
    include('connect.php');
    $delstring = "DELETE FROM tbl_movies WHERE movie_id = {$id}";
    $delquery = mysqli_query($link, $delstring);
    mysqli_close($link);
    redirect_to('../../index.php');
  }


  //edit a movie
 function editMovie($id, $title, $cover, $runtime, $trailer, $year, $desc, $rate_score){
   include('connect.php');
   //movie trailer and cover image
   if($cover['name'] != ''){
   if($trailer['name'] != ''){
   //updates the tbl_movies in db
   $updateString = "UPDATE tbl_movies SET movie_title='{$title}', movie_cover = '{$cover['name']}', movie_runtime = '{$runtime}', movie_trailer = '{$trailer}', movie_year = '{$year}', movie_desc = '{$desc}', movie_rate_score = '{$rate_score}' WHERE movie_id = '{$id}'";
   $updateQuery = mysqli_query($link, $updateString);

   //little unsure if this is done properly for edit or update a movie

   }else{
   //updates movie cover
   $updateString = "UPDATE tbl_movies SET movie_title = '{$title}', movie_cover = '{$cover['name']}', movie_runtime = '{$runtime}', movie_desc = '{$desc}', movie_year = '{$release}', movie_rate_score = '{$rate_score}' WHERE movie_id = '{$id}'";
   $updateQuery = mysqli_query($link, $updateString);
 }
}
   mysqli_close($link);
}

    //add movie ability for logged in user/admin
    function addMovie($title, $cover, $runtime, $trailer, $year, $desc, $rate_score, $genres){
      include("connect.php");
		  if($_FILES['newCover']['type'] == "image/jpeg" || $_FILES['newCover']['type'] == "image/jpg" ){
      //upload movie cover
      $path = "../img/{$cover['name']}";
			move_uploaded_file($cover['tmp_name'], $path);
      //upload movie trailer/movie (.mp4 file)
			$path2 = "../video/{$trailer['name']}";
			move_uploaded_file($trailer['tmp_name'], $path2);
      //will add mp4 and jpg into tbl_movies from db to add a new movie to this site
			$addstring = "INSERT INTO tbl_movies VALUES(NULL, '{$title}','{$cover['name']}','{$runtime}','{$trailer}','{$year}','{$desc}','{$rate_score}')";
			$addresult = mysqli_query($link, $addstring);
			if($addresult){
      //adds movie to tbl_movies at the end of list
			$qstring = "SELECT * FROM tbl_movies ORDER BY movie_id DESC LIMIT 1";
			$end = mysqli_query($link, $qstring);
			$row = mysqli_fetch_array($end);
			$lastID = $row['movie_id'];
      //based on genre, will be inserted/added to link table to catagorize movie into specific genre location and details
			$genstring = "INSERT INTO tbl_mov_genre VALUES(NULL, {$lastID}, {$genre})";
			echo $genstring;
			$genresult = mysqli_query($link, $genstring);
			redirect_to("admin_update.php");
	 }
}
      mysqli_close($link);
}

    //add genre when adding a movie or updating a movie
    function addGenre($id, $genre){
      include('connect.php');
      if($genre != ''){
      //adds in movie to genre
      $updateString = "INSERT INTO tbl_mov_genre VALUE (NULL, '{$id}', '{$genre}')";
      $updateQUery = mysqli_query($link, $updateString);
}
      mysqli_close($link);
}

?>

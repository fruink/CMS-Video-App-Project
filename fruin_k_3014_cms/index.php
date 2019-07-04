<?php

    require_once('admin/phpscripts/config.php');

    $genres = getGenres();
    //movies sorted into genres (easier for user/visitor to navigate)
    while($row = $genres->fetch_array()){
    $genre_rows[] = $row;
    //echo $row;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie Review Site</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"><!--using ionicons for icons in this project-->
</head>
<body>
    <?php
        if($_SESSION['logged_in'] != 'okay'){//user logged in will see homepage and admin login btn (verify user when logged in from db)
        //echo 'logged_in';

          //both headers are wrapped in echo's for visitor (not logged in & user/admin who is logged in)


            //if user is not logged in they will ONLY see movies and watch them on click
            echo '
                <header class="topBar">
                    <i><a href="admin/admin_login.php">Login account</a></i>
                </header>
            ';


        //if user is logged in then they WILL see in header Edit/Add movie btn that gives them the ability to add, delete, and edit a movie.
        //Also will find a signout btn in option list.
        }else{//header display for admin/user logged into the site only
            echo '
                <header class="topBar">
                    <i><a href="admin/admin_update.php">Edit/Add movie</a></i>
                </header>
            ';
        }



        //movies from db (genres are arranged and displayed into rows to divide them according to their genre group, [makes it easier for user to navigate through movies])
        foreach($genre_rows as $row){//movies are arranged in their set genres based off db and users input in titleG (title's genre)
            $genre = $row['genre_name'];
            //genre row start div tag
            echo "<section class='genre_row'>
            <h2 class='titleG'> {$genre} </h2>
            ";

            //movies from db from tbls and columns
            //taking movies info from db and displaying it onto the site
            $tbl = "tbl_movies";
		        $tbl2 = "tbl_genre";
		        $tbl3 = "tbl_mov_genre";//linking tbl for movies and genres and how they are sorted onto the site and in db
            //fetch movie's id, genre's id, and genre name to display into rows on homepage screen
            $col = "movie_id";
		        $col2 = "genre_id";
		        $col3 = "genre_name";

            //selected movie will direct user to details page that gives user movie details and ability to watch the movie
            $movies = get_single_genre($genre, $tbl, $tbl2, $tbl3, $col, $col2, $col3);
              while($row = mysqli_fetch_array($movies)){
                //thumbnail redirects user to the selected movie's details page (details page)
                echo "<a href=\"details.php?id={$row['movie_id']}\"><img class ='thumb' src='img/{$row['movie_cover']}' alt ='the image'></a>";
            }
                echo "</section>";//closing div from genre row
        }


    ?>

</body>
</html>

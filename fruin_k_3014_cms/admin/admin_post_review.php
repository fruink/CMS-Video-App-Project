<?php

require_once('phpscripts/config.php');
confirm_logged_in();


//submit details
if(isset($_POST['submit'])){
    $review = $_POST['review'];
    //add/submit the review (though haven't figured out how to enter it into the db yet...)
    add_review($review);
}



 ?>

 <!doctype html>
 <html>
 <head>
 <meta charset="UTF-8">
 <title>Post a review</title>
 <link rel="stylesheet" href="../css/main.css">
 <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"><!--using ionicons for icons in this project-->
 </head>
 <body>

   <?php
   if(!is_string($getSingle)){
     $row = mysqli_fetch_array($getSingle);

     echo "

     <section id='reviews'>


     ";


         //if user/admin is logged in then they wil have the ability to post a review on the movie, if not, then visotor of this site will NOT see this textarea box

         if($_SESSION['logged_in'] == 'okay'){


                 //form for user to post their review on selected movie below &amp; and see other reviews


                 //blockquote is not yet functional at the moment but demonstrates how it will look on the movies details page for users/admin who are logged in (gives others a view on other reviews regarding this movie)

                 echo "

               <aside class='form'>
               <form action='details.php' method='post' id='user_rate'>
                 <h3 class='review_post'>Post a movie review with a rating below. Please obey sites policy on reviews.</h3>

                 <label class='review_tit'>Review:</label>

                   <br>

                 <textarea id='review_input' type='text' name='review'></textarea>

                 <input id ='submit_review' type='submit' name='submit' value='Add Review'>

                 <br>
                 <br>

               <label class='review_tit'>Movie's current review(s):</label>
               <blockquote class='quote'>
               <h4>Emma, London ON</h4>
               <p>Fantasic Movie. Love how it capture the dramatic scenes.</p>
               </blockquote>

               </form>

               </aside>

               </section>

               ";

            }

      }


?>



<!--redirects user back to homepage from details page-->
<p><a id='back' href="admin_update.php">back to admin panel</a><p>


</body>
</html>

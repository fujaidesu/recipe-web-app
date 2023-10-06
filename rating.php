<?php

  include('connection.php'); 
  $con = mysqli_connect($host, $user, $password, $db_name);  
  if(mysqli_connect_errno()) {  
      die("Failed to connect to MySQL: ". mysqli_connect_error());  
  }  
  $recipeId = $_SESSION['recipeId'];

  // calculate average rating
  $sql = "SELECT COUNT(*) AS totalNumRating FROM ratings WHERE recipeid = $recipeId";
  $result = mysqli_query($con, $sql);
  if (!$result) {
      die('Error: ' . mysqli_error($con));
  }
  $row = mysqli_fetch_assoc($result);
  $totalNumRating = $row['totalNumRating'];

  $sql = "SELECT ROUND(AVG(ratingvalue), 1) AS avgRating FROM ratings WHERE recipeid = $recipeId";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
      $avgRating = $result->fetch_assoc()["avgRating"];
  } else {
      $avgRating = 0;
  }

  // Check if user is logged in
  if (isset($_SESSION['isLoginSuccess']) && $_SESSION['isLoginSuccess']) {
    $userId = $_SESSION['userId'];

    // Query database for current rating value for this recipe and user
    $sql = "SELECT ratingvalue FROM ratings WHERE recipeid = $recipeId AND userid = $userId";
    $result = $con->query($sql);

    // If a rating value exists, pre-select the corresponding stars
    $stars = '';
    if ($result->num_rows > 0) {
      $ratingValue = $result->fetch_assoc()["ratingvalue"];
      for ($i = 5; $i >= 1; $i--) {
        if ($i == $ratingValue) {
          $stars .= '<input type="radio" name="rating" id="star-' . $i . '" value="' . $i . '" checked><label for="star-' . $i . '"></label>';
        } else {
          $stars .= '<input type="radio" name="rating" id="star-' . $i . '" value="' . $i . '"><label for="star-' . $i . '"></label>';
        }
      }
    } else {
      // If no rating value exists, no stars are pre-selected
      $stars .= '<input type="radio" name="rating" id="star-5" value="5"><label for="star-5"></label>';
      $stars .= '<input type="radio" name="rating" id="star-4" value="4"><label for="star-4"></label>';
      $stars .= '<input type="radio" name="rating" id="star-3" value="3"><label for="star-3"></label>';
      $stars .= '<input type="radio" name="rating" id="star-2" value="2"><label for="star-2"></label>';
      $stars .= '<input type="radio" name="rating" id="star-1" value="1"><label for="star-1"></label>';
    }

    // Display star rating inputs with pre-selected stars, if applicable
    echo '<form id="rating-form">';
    echo '<label>Rate This</label>';
    echo '<div class="star-input">';
    echo '<span id="avg-rating"></span>';
    if ($totalNumRating){
      echo '<span id="avg-rating">' . number_format($avgRating, 1) . ' out of ' . $totalNumRating . ' rating(s)</span>';
    }else{
      echo '<span id="avg-rating"> No rating yet</span>';
    }
    echo $stars;
    echo '</div>';
    echo '</form>';
  } else {
    // Display disabled star rating inputs for non-logged in users
    echo '<label>Please login to rate and save this recipe</label>';
    echo '<div class="star-input">';
    echo '<span id="avg-rating"></span>';
    if ($totalNumRating){
      echo '<span id="avg-rating">' . number_format($avgRating, 1) . ' out of ' . $totalNumRating . ' rating(s)</span>';
    }else{
      echo '<span id="avg-rating"> No rating yet</span>';
    }
    echo '<input type="radio" name="rating" id="star-5" value="5" disabled><label for="star-5"></label>';
    echo '<input type="radio" name="rating" id="star-4" value="4" disabled><label for="star-4"></label>';
    echo '<input type="radio" name="rating" id="star-3" value="3" disabled><label for="star-3"></label>';
    echo '<input type="radio" name="rating" id="star-2" value="2" disabled><label for="star-2"></label>';
    echo '<input type="radio" name="rating" id="star-1" value="1" disabled><label for="star-1"></label>';
    echo '</div>';
  }

  $con->close();
?>
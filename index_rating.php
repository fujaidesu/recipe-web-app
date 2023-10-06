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

  $con->close();

  if ($totalNumRating){
    echo '<p>' . number_format($avgRating, 1) . '</p>';
  }else{
    echo '<p>N/A</p>';
  }
?>
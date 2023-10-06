<?php
  // Check if user is logged in
  if (isset($_SESSION['isLoginSuccess']) && $_SESSION['isLoginSuccess']) {
    include('connection.php'); 
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect to MySQL: " . mysqli_connect_error());  
    }  

    $recipeId = $_SESSION['recipeId'];
    $userId = $_SESSION['userId'];

    // Query database for current value for this recipe and user
    $sql = "SELECT * FROM favouriterecepies WHERE recipeid = $recipeId AND userid = $userId";
    //echo "SQL Query: " . $sql . "<br>"; // for debugging purposes only
    $result = $con->query($sql);

    // If a value exists, pre-select the corresponding button as added
    if ($result->num_rows > 0) {
      echo '<button id="favoritesButton" onclick="addToFavorites()">Added to Favourites</button>';
    } else {
      // If no  value exists, pre-select the corresponding button as add
      echo '<button id="favoritesButton" onclick="addToFavorites()">Add to Favourites</button>';
    }

    $con->close();
  } else {
    // Display disabled add to favourite button for non-logged in users
    echo '<button id="favoritesButton" onclick="addToFavorites()" disabled>Add to Favourites</button>';
  }
?>

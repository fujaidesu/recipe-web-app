<?php      
    session_start();
    include('connection.php');  
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect to MySQL: ". mysqli_connect_error());  
    }  

    $recipeId = $_SESSION['recipeId'];
    $userId = $_SESSION['userId'];
    $ratingValue = $_POST['rating'];

    // update data in database
    $sql = "INSERT INTO ratings (recipeid, userid, ratingvalue) 
    VALUES ($recipeId, $userId, $ratingValue) 
    ON DUPLICATE KEY UPDATE ratingvalue = $ratingValue";

    if ($con->query($sql) === TRUE) {
        $response = array('message' => 'Rating submitted successfully.');
    } else {
        $response = array('message' => 'Error: ' . $sql . "<br>" . $con->error);
    }

    // calculate average rating
    $sql = "SELECT ROUND(AVG(ratingvalue), 1) AS avgRating FROM ratings WHERE recipeid = $recipeId";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $avgRating = $result->fetch_assoc()["avgRating"];
    } else {
        $avgRating = 0;
    }

    $_SESSION['avgRating'] = $avgRating;

    $con->close();

    echo json_encode($response);
?>
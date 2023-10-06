<?php
    session_start();
    include('connection.php');  
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect to MySQL: ". mysqli_connect_error());  
    }  

    if (isset($_POST['status'])) {
        $status = $_POST['status'];
        $recipeId = $_SESSION['recipeId'];
        $userId = $_SESSION['userId'];

        if ($status === "add") {
            // Insert a new favorite item
            $stmt = $con->prepare("INSERT INTO favouriterecepies (userid, recipeid) VALUES (?, ?)");
            $stmt->bind_param("ii", $userId, $recipeId);
            $stmt->execute();
            $stmt->close();

            echo "added";
        } else if ($status === "remove") {
            // Delete an existing favorite item
            $stmt = $con->prepare("DELETE FROM favouriterecepies WHERE userid = ? AND recipeid = ?");
            $stmt->bind_param("ii", $userId, $recipeId);
            $stmt->execute();
            $stmt->close();

            echo "removed";
        }
    }
    $con->close();
?>
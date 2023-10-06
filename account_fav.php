<?php
    include('connection.php');
    $con = mysqli_connect($host, $user, $password, $db_name);
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    $sql = "SELECT r.recipeId, r.title, ROUND(AVG(rv.ratingvalue), 1) AS avg_rating, rv.ratingvalue AS user_rating, r.description
        FROM recipes r
        JOIN favouriterecepies f ON r.recipeId = f.recipeId
        LEFT JOIN ratings rv ON r.recipeId = rv.recipeId
        GROUP BY r.recipeId, r.title";

    // Determine if sorting is needed
    if (isset($_GET['sort'])) {
        // Sort by highest rating
        if ($_GET['sort'] == 'highest') {
            $sql .= " ORDER BY avg_rating DESC";
        }
        // Sort by lowest rating
        elseif ($_GET['sort'] == 'lowest') {
            $sql .= " ORDER BY avg_rating ASC";
        }
    }

    $result = mysqli_query($con, $sql);

    // Check if the query execution was successful
    if ($result) {
        // Check if any favorite recipes were found
        if (mysqli_num_rows($result) > 0) {
            // Create a table to display the favorite recipes data
            echo '<h4>My Favourites</h4>';
            echo '<div class="filter-container">';
            echo '<div><input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search recipes"></div>';
            echo '<div><select id="sortSelect" onchange="sortTable()">';
            echo '<option value="">Sort by</option>';
            echo '<option value="highestAvg">Highest average rating</option>';
            echo '<option value="lowestAvg">Lowest average rating</option>';
            echo '<option value="highestUser">Highest user rating</option>';
            echo '<option value="lowestUser">Lowest user rating</option>';
            echo '</select></div>';
            echo '</div>';
            echo '<table id="favTable" class="table">';
            echo '<thead><tr><th>Recipe ID</th><th>Recipe Name</th><th>Course</th><th>User Rating</th><th>Average Rating</th></tr></thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>'.$row['recipeId'].'</td>';
                echo '<td>'.$row['title'].'</td>';
                echo '<td>'.$row['description'].'</td>';
                echo '<td>'.($row['user_rating'] ? $row['user_rating'] : 'N/A').'</td>';
                if ($row['avg_rating']){
                    echo '<td>'.number_format($row['avg_rating'], 1).'</td>';
                }
                else{
                    echo '<td>N/A</td>';
                }
                echo '</tr>';
            }
            echo '</tbody></table>';
        } else {
            // Display a message if no favorite recipes were found
            echo '<p>You have no favourite recipes yet!</p>';
        }
    } else {
        // Display an error message if the query execution failed
        echo 'Error: '.mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
?>
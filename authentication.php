<?php      
    session_start();
    include('connection.php');  
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect to MySQL: ". mysqli_connect_error());  
    }  

    $loginUsername = $_POST['name'];  
    $loginPassword = $_POST['pass'];  
    $isLoginSuccess = false; // Initialize the flag to false
      
    //to prevent from mysqli injection  
    $loginUsername = stripcslashes($loginUsername);  
    $loginPassword = stripcslashes($loginPassword);  
    $loginUsername = mysqli_real_escape_string($con, $loginUsername);  
    $loginPassword = mysqli_real_escape_string($con, $loginPassword);  
    
    $sql = "SELECT * FROM users WHERE username = '$loginUsername' AND password = '$loginPassword'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    //echo "sql: " . $sql . "<br>"; // for debugging purposes only
    //echo "row: " . print_r($row, true) . "<br>"; // for debugging purposes only
    //echo "count: " . $count . "<br>"; // for debugging purposes only

    if($count == 1){  
        $isLoginSuccess = true; // Set the flag to true
        $userId = $row['UserID']; // Get the user info from the database
        $username = $row['Username'];
        $email = $row['Email'];
        $lastname = $row['LastName'];
        $firstname = $row['FirstName'];
        // Save the user info in the session variables
        $_SESSION['isLoginSuccess'] = $isLoginSuccess;
        $_SESSION['userId'] = $userId;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['lastname'] = $lastname;  
        $_SESSION['firstname'] = $firstname;
        header('Location: account.php');  
        //echo "isLoginSuccess: " . $_SESSION['isLoginSuccess'] . "<br>"; // for debugging purposes only
        //echo "userId: " . $_SESSION['userId'] . "<br>"; // for debugging purposes only
        //echo "username: " . $_SESSION['username'] . "<br>"; // for debugging purposes only
        //echo "email: " . $_SESSION['email'] . "<br>"; // for debugging purposes only
        //echo "lastname: " . $_SESSION['lastname'] . "<br>"; // for debugging purposes only
        //echo "firstname: " . $_SESSION['firstname'] . "<br>"; // for debugging purposes only
    } 
    else{
        $isLoginSuccess = false; // Set the flag to false
        header('Location: login.php');  
    } 

    $con->close();
?>
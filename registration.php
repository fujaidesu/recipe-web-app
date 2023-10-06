<?php
    session_start();
    include('connection.php');  
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect to MySQL: ". mysqli_connect_error());  
    }  

    $regUsername = $_POST['username'];  
    $regPassword = $_POST['password'];  
    $regEmail = $_POST['email'];  
    $regLastname = $_POST['lastname'];
    $regFirstname = $_POST['firstname'];
    $isRegistrationSuccess = false; // Initialize the flag to false
      
    //to prevent from mysqli injection  
    $regUsername = stripcslashes($regUsername);  
    $regPassword = stripcslashes($regPassword);  
    $regEmail = stripcslashes($regEmail);  
    $regLastname = stripcslashes($regLastname);  
    $regFirstname = stripcslashes($regFirstname);  
    $regUsername = mysqli_real_escape_string($con, $regUsername);  
    $regPassword = mysqli_real_escape_string($con, $regPassword);  
    $regEmail = mysqli_real_escape_string($con, $regEmail);  
    $regLastname = mysqli_real_escape_string($con, $regLastname);  
    $regFirstname = mysqli_real_escape_string($con, $regFirstname);  
    
    $sql = "INSERT INTO users(username,password,email,lastname,firstname) VALUES('$regUsername','$regPassword','$regEmail','$regLastname','$regFirstname')";  

    if(mysqli_query($con, $sql)){  
        $isRegistrationSuccess = true;
        $_SESSION['isLoginSuccess'] = $isRegistrationSuccess;
        //header("Location: account.php");  
    } 
    else{  
        echo "Error: " . $sql . "<br>" . mysqli_error($con);  
    } 

    mysqli_close($con); 
?>
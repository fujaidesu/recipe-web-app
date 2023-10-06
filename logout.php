<?php
    session_start();
    $_SESSION['isLoginSuccess'] = false;
    session_destroy();
    header('Location: login.php');
?>
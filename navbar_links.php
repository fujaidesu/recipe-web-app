<?php
  // Check if user is logged in
  if (isset($_SESSION['isLoginSuccess']) && $_SESSION['isLoginSuccess']) {
    // Display for logged in users
    echo '<li><a href="account.php">MyAccount</a></li>';

  } else {
    // Display for non-logged in users
    echo '<li><a href="login.php">Login</a></li>';
  }
?>

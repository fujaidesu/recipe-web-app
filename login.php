<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyRecipe - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <header>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="index.php">MyRecipe</a>
        </div>
        <div class="navbar-links">
          <?php  
            session_start();
            include('navbar_links.php');
          ?>
        </div>
    </nav>
  </header>

  <main id="main">
    
    <!-- content -->
    <section class="section">
      <div class="container">
        <div class="mb-5 align-items-end">
          <div class="col-md-12">
            <h2>Login</h2>
            <p class="mb-0">Login to rate the receipes!</p>
          </div>

        </div>

        <!-- Show the error message if login failed -->
        <?php
          if(isset($_SESSION['isLoginSuccess']) && !$_SESSION['isLoginSuccess']) {
            echo '<div class="error-msg">Login failed. Invalid username or password.</div>';
            unset($_SESSION['isLoginSuccess']); // unset the session variable
          }
        ?>

        <div class="col-md-6 mb-5 mb-md-0">

          <form name="f1" action="authentication.php" method="POST">
            <div class="gy-3">
              <div class="col-md-12">
                <label>Username</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>  
              <div class="col-md-12">
                <label>Password</label>
                <input type="password" name="pass" class="form-control" id="pass" required>
              </div>

              <div class="col-md-6 mt-0 form-group">
                <br>
                <input type="submit" class="readmore d-block w-50" value="Login">
              </div>
            </div>

          </form>

          <span display="block" class="mb-0">Don’t have an account? <a href="register.php" display="inline" font-size="inherit">Register</a></span>

        </div>

      </div>

    </section>

  </main>

</body>

</html>
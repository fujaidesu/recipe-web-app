<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyRecipe - Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

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

        <div class="row mb-5 align-items-end">
          <div class="col-md-12">
            <h2>Create an account</h2>
            <p class="mb-0">Join us to rate the receipes!</p>
          </div>
        </div>

        <!-- Show the error message if register failed -->
        <?php
          if(isset($_SESSION['isRegisterSuccess']) && !$_SESSION['isRegisterSuccess']) {
            echo '<div class="error-msg">Registration failed. The username or email is already taken.</div>';
            unset($_SESSION['isRegisterSuccess']); // unset the session variable
          } else if (isset($_SESSION['isRegisterSuccess']) && $_SESSION['isRegisterSuccess']){
            echo '<div class="success-msg">Registration successful. Please login now.</div>';
            unset($_SESSION['isRegisterSuccess']); // unset the session variable
          }
        ?>

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <form action="registration.php" method="POST">
              <div class="row gy-3">
                <div class="col-md-12 form-group">
                  <label>User name</label>
                  <input type="text" name="username" class="form-control" id="name" required>
                </div>

                <div class="col-md-12 form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                            
                <div class="col-md-12 form-group">
                  <label>Last name (Optional)</label>
                  <input type="text" name="lastname" class="form-control" id="lname">
                </div>

                <div class="col-md-12 form-group">
                  <label>First name (Optional)</label>
                  <input type="text" name="firstname" class="form-control" id="fname">
                </div>

                <div class="col-md-12 form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="pass" required>
                </div>
                            
                <div class="col-md-12 mt-0 form-group">
                  <br>
                  <input type="submit" class="readmore d-block w-50" value="Register">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyRecipe - Account</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
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
            <h2>My Account</h2>
            <p class="mb-0">Welcome, <?php echo $_SESSION['username'];?>!</p>
          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-md-12">
            <h4>My Portfolio</h4>
            <form class="row g-3">
              <div class="col-md-6">
                <label for="userId" class="form-label">User ID</label>
                <input type="text" readonly class="form-control" id="userId" value="<?php echo $_SESSION['userId'];?>">
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email address</label>
                <input type="email" readonly class="form-control" id="email" value="<?php echo $_SESSION['email'];?>">
              </div>
              <div class="col-md-6">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" readonly class="form-control" id="firstname" value="<?php echo $_SESSION['firstname'];?>">
              </div>
              <div class="col-md-6">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" readonly class="form-control" id="lastname" value="<?php echo $_SESSION['lastname'];?>">
              </div>
            </form>
          </div>
        </div>


        <div class="row mb-5 align-items-center">
          <div class="col-md-12">
            <?php  
              include('account_fav.php');
            ?>
          </div>
        </div>
        


        <p><a href="logout.php" class="readmore">Logout</a></p>
      </div>

    </section>

  </main>

  <!-- Filter JS File -->
  <script src="assets/js/account_filter.js"></script>
  
</body>

</html>
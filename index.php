<!--
* Website Name: MyRecipe
* Version: 1.1
* Updated: 24 Sep 2023
-->
  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyRecipe - Home</title>
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
        <div class="row mb-5 align-items-center">
          <div class="col-md-12">
            <h2>Welcome to MyRecipe!</h2>
            <p class="mb-0">You can find recipes and their public ratings here.</p>
          </div>
        </div>

        <div class="filter-index col-md-12">
          <button class="btn active" data-filter="all">All</button>
          <button class="btn" data-filter="starter">Starter</button>
          <button class="btn" data-filter="main">Main</button>
          <button class="btn" data-filter="dessert">Dessert</button>
        </div>
        <br>

        <div id="recipe-grid" class="row no-gutter">
          <div class="item starter col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="couscous-salad.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Couscous salad</h3>
                <span>Starter</span>
                <?php  
                  $_SESSION['recipeId'] = 1; // hardcode the recipe ID based on database
                  include('index_rating.php'); // display average rating
                ?>
              </div>
              <img class="img-fluid" src="assets/img/couscous_salad.jpg">
            </a>
          </div>

          <div class="item dessert col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="mango-pie.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Mango pie</h3>
                <span>Dessert</span>
                <?php  
                  $_SESSION['recipeId'] = 2; // hardcode the recipe ID based on database
                  include('index_rating.php'); // display average rating
                ?>
              </div>
              <img class="img-fluid" src="assets/img/mango_pie.jpg">
            </a>
          </div>

          <div class="item main col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="spaghetti-bolognese.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Spaghetti bolognese</h3>
                <span>Main</span>
                <?php  
                  $_SESSION['recipeId'] = 3; // hardcode the recipe ID based on database
                  include('index_rating.php'); // display average rating
                ?>
              </div>
              <img class="img-fluid" src="assets/img/spaghetti_bolognese.jpg">
            </a>
          </div>

          <div class="item dessert col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="vegan-pancakes.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Vegan pancakes</h3>
                <span>Dessert</span>
                <?php  
                  $_SESSION['recipeId'] = 4; // hardcode the recipe ID based on database
                  include('index_rating.php'); // display average rating
                ?>
              </div>
              <img class="img-fluid" src="assets/img/vegan_pancakes.jpg">
            </a>
          </div>

          <div class="item main col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="healthy-pizza.php" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Healthy pizza</h3>
                <span>Main</span>
                <?php  
                  $_SESSION['recipeId'] = 5; // hardcode the recipe ID based on database
                  include('index_rating.php'); // display average rating
                ?>
              </div>
              <img class="img-fluid" src="assets/img/healthy_pizza.jpg">
            </a>
          </div>

        </div>
      </div>
    </section>

  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Filter JS File -->
  <script src="assets/js/index_filter.js"></script>

</body>

</html>
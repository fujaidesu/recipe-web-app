<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyRecipe - Couscous Salad</title>
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
        <div class="row mb-4 justify-content-left">
          <div class="col-md-6">
            <h2>Couscous salad</h2>
            <p class="mb-4"><span class="text-muted">Starter</span></p>
          </div>
        </div>

        <?php  
          $_SESSION['recipeId'] = 1; // hardcode the recipe ID based on database
          include('rating.php'); // 5-star rating system
          include('add_fav.php'); // Add to favourites
        ?>
      </div>
        
      <div class="section">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8">
              <img src="assets/img/couscous_salad.jpg" alt="Image" class="img-fluid">

              <div class="mb-5">
                <p>A flavorful, colourful, and fulfilling vegan couscous salad made 
                  with dried cranberries, pistachios, and pine nuts.
                </p>
              </div>
            </div>
            <div class="col-md-3 ml-auto">
              <h4 class="h4 mb-3">Preparation time</h4>
              <ul class="list-unstyled list-line mb-5">
                <li>less than 30 minutes</li>
              </ul>

              <h4 class="h4 mb-3">Cooking time</h4>
              <ul class="list-unstyled list-line mb-5">
                <li>less than 10 minutes</li>
              </ul>
            </div>

            <div class="col-md-12 ml-auto">
              
              <h4 class="h4 mb-3">Ingredients</h4>
              <ul class="list-unstyled list-line mb-5">
                <li>225g/8oz couscous</li>
                <li>8 small preserved lemons</li>
                <li>180g/6⅓oz dried cranberries</li>
                <li>120g/4⅓oz pine nuts, toasted</li>
                <li>160g/5¾oz unsalted shelled pistachio nuts, roughly chopped</li>
                <li>60g/2¼oz flatleaf parsley, finely chopped</li>
                <li>4 garlic cloves, crushed</li>
                <li>4 tbsp red wine vinegar</li>
                <li>1 red onion, finely chopped</li>
                <li>1 tsp salt, or to taste</li>
                <li>80g/2¾oz rocket leaves</li>
              </ul>

              <h4 class="h4 mb-3">Steps</h4>
              <ol class="list-number mb-5">
                <li>Combine all the ingredients in a large bowl, excluding the rocket, and then taste and adjust the 
                  seasoning, adding additional salt if required. Place the rocket in and start serving right away.</li>
              </ol>

              <p><a href="https://www.bbc.co.uk/food/recipes/dried_fruits_and_nuts_18053" class="readmore">View more</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- back to top button -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Rating js file -->
  <script src="assets/js/rating.js"></script>

  <!-- Add to favourite js file -->
  <script src="assets/js/add_fav.js"></script>

</body>

</html>
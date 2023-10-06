<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyRecipe - Spaghetti Bolognese</title>
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
        <div class="row mb-4 align-items-center">
          <div class="col-md-6">
            <h2>Spaghetti bolognese</h2>
            <p class="mb-4"><span class="text-muted">Main</span></p>
          </div>
        </div>
        
        <?php  
          $_SESSION['recipeId'] = 3; // hardcode the recipe ID based on database
          include('rating.php'); // 5-star rating system
          include('add_fav.php'); // Add to favourites
        ?>
      </div>

      <div class="section">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8">
              <img src="assets/img/spaghetti_bolognese.jpg" alt="Image" class="img-fluid">

              <div class="mb-5">
                <p>The hob will handle the remainder of the preparation after you have this
                    adult spag bol cooking. The next day, any leftovers will taste even better.
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
                <li>1 to 2 hours</li>
              </ul>
            </div>

            <div class="col-md-12 ml-auto">
              <h4 class="h4 mb-3">Ingredients</h4>
              <ul class="list-unstyled list-line mb-5">
                <li>2 tbsp olive oil or sun-dried tomato oil from the jar</li>
                <li>6 rashers of smoked streaky bacon, chopped</li>
                <li>2 large onions, chopped</li>
                <li>3 garlic cloves, crushed</li>
                <li>1kg/2¼lb lean minced beef</li>
                <li>2 large glasses of red wine</li>
                <li>2x400g cans chopped tomatoes</li>
                <li>1x290g jar antipasti marinated mushrooms, drained</li>
                <li>2 fresh or dried bay leaves</li>
                <li>1 tsp dried oregano or a small handful of fresh leaves, chopped</li>
                <li>1 tsp dried thyme or a small handful of fresh leaves, chopped</li>
                <li>Drizzle balsamic vinegar</li>
                <li>12-14 sun-dried tomato halves, in oil</li>
                <li>Salt and freshly ground black pepper</li>
                <li>A good handful of fresh basil leaves, torn into small pieces</li>
                <li>800g-1kg/1¾-2¼lb dried spaghetti</li>
                <li>Lots of freshly grated parmesan, to serve</li>
              </ul>

              <h4 class="h4 mb-3">Steps</h4>
              <ol class="list-number mb-5">
                <li>In a large, heavy-bottomed skillet with heated oil, cook the bacon until browned over medium heat. 
                  Fry the onions and garlic after adding them till tender. Add the beef mince and turn up the heat. 
                  Use a wooden spoon to break up any large pieces of meat as you fry it until it has browned. 
                  Pour the wine in and boil it for roughly a third of its initial volume. Stir in the tomatoes, 
                  drained mushrooms, bay leaves, oregano, thyme, and balsamic vinegar after lowering the heat.
                </li>
                <li>Before adding the sun-dried tomatoes to the pan, either finely chop them or blitz them in a tiny 
                  blender with a bit of the oil to loosen. Add salt and pepper to taste. The Bolognese sauce should 
                  be simmered, covered with a lid, for 1 to 112 hours, stirring periodically, until it has thickened 
                  and become rich. Add the basil and any more spice towards the conclusion of the cooking process.
                </li>
                <li>As you cook the spaghetti in plenty of boiling, salted water according to the package directions, 
                  turn off the heat to let it "settle." Divide amongst warmed plates after draining. Sprinkle some 
                  parmesan cheese over the spaghetti before adding a generous ladle of the Bolognese sauce. 
                  Add a dash of black pepper to taste.
                </li>
              </ol>

              <p><a href="https://www.bbc.co.uk/food/recipes/spaghettibolognese_67868" class="readmore">View more</a></p>
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
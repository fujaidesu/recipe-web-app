<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyRecipe - Vegan Pancakes</title>
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
            <h2>Vegan pancakes</h2>
            <p class="mb-4"><span class="text-muted">Dessert</span></p>
          </div>
        </div>

        <?php  
          $_SESSION['recipeId'] = 4; // hardcode the recipe ID based on database
          include('rating.php'); // 5-star rating system
          include('add_fav.php'); // Add to favourites
        ?>
      </div>

      <div class="section">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8">
              <img src="assets/img/vegan_pancakes.jpg" alt="Image" class="img-fluid">

              <div class="mb-5">
                <p>Try making these vegan, fluffy American pancakes for the ideal way to start the day. 
                  For a really opulent morning meal, top these pancakes with fresh fruit, maple syrup, 
                  or chocolate sauce.
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
                <li>10 to 30 minutes</li>
              </ul>
            </div>

            <div class="col-md-12 ml-auto">
              <h4 class="h4 mb-3">Ingredients</h4>
              <ul class="list-unstyled list-line mb-5">
                <li>125g/4½oz self-raising flour</li>
                <li>2 tbsp caster sugar</li>
                <li>1 tsp baking powder</li>
                <li>good pinch sea salt</li>
                <li>150ml/5fl oz soya milk or almond milk</li>
                <li>¼ tsp vanilla extract</li>
                <li>4 tsp sunflower oil, for frying</li>
              </ul>

              <h4 class="h4 mb-3">Steps</h4>
              <ol class="list-number mb-5">
                <li>Mix together the flour, sugar, baking powder, and salt in a bowl. 
                  Whip the mixture till smooth after adding the milk and vanilla essence.
                </li>
                <li>A big nonstick frying pan should be heated to medium. Add two tablespoons 
                  of the oil, then carefully clean the pan with a heatproof brush or a large 
                  piece of kitchen paper.
                </li>
                <li>Once the pan is heated, add a tiny amount of batter (about two dessert spoons) 
                  to one side and spread with the back of the spoon until the circle is about 10 cm 
                  (4 inches) in diameter. Using the leftover oil to grease the pan before adding the 
                  batter, make a second pancake precisely the same manner.
                </li>
                <li>Cook for approximately a minute, or until surface bubbles start to pop and only 
                  the edges remain dry and faintly shining. Flip the pancakes over quickly and gently, 
                  and cook the second side for another minute, or until it is fluffy, light, and pale 
                  golden brown. The pancakes won't rise evenly if you turn them too late. If you want 
                  the first side to get a little bit browner, you may easily turn it again.
                </li>
                <li>While the remaining pancakes are being cooked in the same manner, transfer the ones 
                  you just made to a plate and keep warm in a single layer (so they don't get squashed) 
                  on a baking sheet in a low oven. Serve with the toppings of your choice.
                </li>
              </ol>

              <p><a href="https://www.bbc.co.uk/food/recipes/vegan_american_pancakes_76094" class="readmore">View more</a></p>
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
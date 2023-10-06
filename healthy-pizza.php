<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyRecipe - Healthy Pizza</title>
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
            <h2>Healthy pizza</h2>
            <p class="mb-4"><span class="text-muted">Main</span></p>
          </div>
        </div>
        <?php  
          $_SESSION['recipeId'] = 5; // hardcode the recipe ID based on database
          include('rating.php'); // 5-star rating system
          include('add_fav.php'); // Add to favourites
        ?>
      </div>

      <div class="section">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="assets/img/healthy_pizza.jpg" alt="Image" class="img-fluid">

              <div class="mb-5">
                <p>This quick, nutritious pizza with bright veggies on top can be made 
                  without yeast and is done in 30 minutes.If you need to feed the kids quickly, 
                  try this recipe!
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

              <b class="mb-0">For the base:</b>
              <ul class="list-unstyled list-line mb-5">
                <li>125g/4½oz self-raising brown or self-raising wholemeal flour, 
                  plus extra for dusting</li>
                <li>pinch fine sea salt</li>
                <li>125g/4½oz full-fat plain yoghurt</li>
              </ul>

              <b class="mb-0">For the topping:</b>
              <ul class="list-unstyled list-line mb-5">
                <li>1 yellow or orange pepper, seeds removed and thinly sliced</li>
                <li>1 courgette, cut into 1cm/½in slices</li>
                <li>1 red onion, cut into thin wedges</li>
                <li>1 tbsp extra virgin olive oil, plus extra for drizzling</li>
                <li>½ tsp dried chilli flakes</li>
                <li>50g/1¾oz ready-grated mozzarella or cheddar, goats’ cheese, 
                  broken into small chunks, or 1 mozzarella ball, sliced or roughly torn</li>
                <li>freshly ground black pepper</li>
                <li>fresh basil leaves, to serve (optional)</li>  
              </ul>

              <b class="mb-0">For the tomato sauce:</b>
              <ul class="list-unstyled list-line mb-5">
                <li>6 tbsp passata sauce (approximately 100g/3½oz)</li>
                <li>1 tsp dried oregano</li>
              </ul>

              <h4 class="h4 mb-3">Steps</h4>
              <ol class="list-number mb-5">
                <li>Set the oven's temperature to 220°C/200°F/Gas 7.
                </li>
                <li>To make the topping, combine the oil, pepper, courgette, red onion, and salt & 
                  pepper to taste in a bowl. Vegetables should be spread out on a large baking sheet 
                  and roasted for 15 minutes.
                </li>
                <li>Make the pizza base in the interim. Salt and flour are combined in a large basin. 
                  Use a spoon to combine the yoghurt and one tablespoon of cold water, then your hands 
                  to knead the mixture into a soft, pliable dough. Knead for approximately a minute 
                  after turning out onto a lightly dusted surface.
                </li>
                <li>Roll the dough into a roughly oval form that is approximately 3mm/1/8in thick, 
                  flipping the dough as you go. (Ideally, the pizza should be around 30 cm (12 inches) 
                  long and 20 cm (8 inches) broad. However, it doesn't matter if the form is uneven; 
                  it simply has to fit onto the same baking pan as the veggies.)
                </li>
                <li>In a bowl, place the roasted veggies. Pizza dough should be slid onto the baking 
                  sheet and baked for five minutes. Turn the dough over after removing the baking sheet from the oven.
                </li>
                <li>Spread the passata and oregano mixture for the tomato sauce on the dough. 
                  The roasted veggies, chilli flakes, and cheese are then placed on top. 
                  Continue baking the pizza for an additional 8 to 10 minutes, or until the cheese is bubbling 
                  and the dough is cooked through.
                </li>
                <li>Just before serving, season with freshly ground black pepper, add a splash of olive oil, and, 
                  if desired, scatter fresh basil leaves on top.
                </li>
              </ol>

              <p><a href="https://www.bbc.co.uk/food/recipes/healthy_pizza_55143" class="readmore">View more</a></p>
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